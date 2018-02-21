<?php

namespace App\Models;

use App\Models\Satuan;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailItem;

class KonversiSatuan extends Model
{
    protected $fillable = [''];

    public function detailItem
    {
    	return $this->hasOne(DetailItem::class, 'id_konversi_satuan');
    }

    public function satuan1
    {
    	return $this->belongsTo(Satuan::class, 'satuan1_id');
    }

    public function satuan2
    {
    	return $this->belongsTo(Satuan::class, 'satuan2_id');
    }
}
