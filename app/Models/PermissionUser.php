<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ModulApp;
use App\Models\GrupUser;
use App\User;

class PermissionUser extends Model
{   
    protected $fillable = ['modul_app_id', 'modul_app_id', 'user_id', 'grup_id'];

    public function modulApp()
    {
    	return $this->belongsTo(ModulApp::class, 'modul_app_id');
    }

    public function grupUser()
    {
    	return $this->belongsTo(GrupUser::class, 'grup_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
