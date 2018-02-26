<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionUser;

class GrupUser extends Model
{
    protected $fillable = ['nama_grup', 'keterangan'];

    public function permissionUser()
    {
    	return $this->hasMany(PermissionUser::class);
    }
}
