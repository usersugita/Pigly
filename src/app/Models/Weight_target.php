<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight_target extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id','target_weight'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
