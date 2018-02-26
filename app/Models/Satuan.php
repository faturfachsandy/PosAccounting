<?php

namespace App\Models;

use App\Models\KonversiSatuan;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Satuan extends Model
{
    protected $fillable = ['nama_satuan', 'keterangan', 'default', 'aktif'];

    public function konveriSatuan1
    {
    	return $this->hasMany(KonversiSatuan::class, 'id');
    }

    public function konveriSatuan2
    {
    	return $this->hasMany(KonversiSatuan::class, 'id');
    }

    public function item
    {
    	return $this->hasOne(Item::class, 'id');
    }
}
