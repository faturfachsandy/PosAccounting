<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\KonversiSatuan;
use App\Models\Item;

class DetailItem extends Model
{
    protected $fillable = [''];

    public function konversiSatuan()
    {
    	return $this->belongsTo(KonversiSatuan::class, 'id_konversi_satuan');
    }

    public function item()
    {
    	return $this->belongsTo(Item::class, 'id_item');
    }
}
