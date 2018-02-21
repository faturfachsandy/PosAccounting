<?php

namespace App\Models;

use App\Models\KonversiSatuan;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Satuan extends Model
{
    protected $fillable = [''];

    public function konversiSatuan
    {
    	return $this->hasMany(KonversiSatuan::class, 'id_satuan');
    }

    public function item
    {
    	return $this->hasOne(Item::class, 'id_satuan');
    }
}
