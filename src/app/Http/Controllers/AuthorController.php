<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Weight_log;
use App\Models\Weight_target;
use Illuminate\Support\Facades\Auth;
class AuthorController extends Controller
{
   // public function register1()
   //{
  //   return view('register1');
 //  }
  public function register2()
  {
    
  return view('register2',$id );
 }
 // public function register(Request $request) 
  //{
  //  $data = $request->only(['name', 'email', 'password']); 
   // $data['password'] = bcrypt($data['password']);     
   // $user = User::create($data);  
  //  return redirect('register/step2')->with('id', $user->id);
 // }
  
  public function weightHandler(Request $request)
  {
    // 現在のログインユーザーIDを取得
    $userId = Auth::id();

    // セッションからIDを取得（リダイレクト後の使用を考慮）
    $user_id = session('id', $userId); // セッションが無い場合、AuthのIDを使用

   // if ($request->isMethod('post')) {    
      Weight_log::create([
        'user_id' => $user_id,
       'weight' => $request->input('weight'),
      ]);   
      Weight_target::create([
       'user_id' => $user_id,
       'target_weight' => $request->input('target_weight'),
      ]);
      // 登録後にリダイレクト
     // return redirect()->route('weight_logs')->with('id', $user_id);
    //}

    // 最新のtarget_weightとweightを取得
    $target_weights = Weight_target::where('user_id', $user_id,)
      //->orderBy('created_at', 'desc')
      ->value('target_weight');

    $weights = Weight_log::where('user_id', $user_id)
      //->orderBy('created_at', 'desc')
        ->value('weight');

    $subtraction = $weights - $target_weights;

    // データ表示用のクエリ
    if (!$user_id && !$userId) {
      // ユーザーが未認証またはセッションが無い場合、すべてのデータを取得
      $authors = Weight_log::paginate(8);
    } else {
      // 特定のユーザーに関連するデータを取得
      $authors = Weight_log::where('user_id', $user_id)->paginate(8);
    }

    // ビューにデータを渡す
    return view('weight_logs', compact('authors', 'user_id', 'userId', 'target_weights', 'weights', 'subtraction'));
  }


    public function login(Request $request)
  {
    // $user = Auth::user();
    // $user_id = $user->id;
    $userId = Auth::id();
    $user_id = session('id', $userId);
    //$id = session('id');
    
    if ($request->has('weight') && $request->has('target_weight')) {

      // Weight_logに新しいレコードを作成
      Weight_log::create([
        'user_id' => $request->input('user_id'),
        'weight' => $request->input('weight'),
      ]);

      // Weight_targetに新しいレコードを作成
      Weight_target::create([
        'user_id' => $request->input('user_id'),
        'target_weight' => $request->input('target_weight'),
      ]);

      // リダイレクトし、メッセージをセッションに保存
      return redirect('weight_logs')->with('id', $userId);
    }
        return view('login');
    }   
    public function update()
    {       
        return view('update');
    }
  public function goal_setting()
  {
    return view('goal_setting');
  }
  
    
}
