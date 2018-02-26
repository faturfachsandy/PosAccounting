<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionUser;

class ModulApp extends Model
{
    protected $fillable = ['nama_modul', 'keterangan'];

    public function permissionUser()
    {
    	return $this->hasMany(PermissionUser::class, 'id');
    }
}
