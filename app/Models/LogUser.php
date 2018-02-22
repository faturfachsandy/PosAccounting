<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class LogUser extends Model
{
    protected $fillable = [''];

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
