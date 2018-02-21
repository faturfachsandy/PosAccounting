<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Item;
use App\Models\DaftarHargaDetail;

class DaftarHarga extends Model
{
    protected $fillable = [''];

    public function person()
    {
    	return $this->hasOne(BarangDatang::class, 'id_daftar_harga');
    }

    public function item()
    {
    	return $this->belongsTo(Item::class, 'item_id');
    }

    public function daftarHargaDetail()
    {
    	return $this->belongsTo(BarangDatang::class, 'barang_datang_id');
    }
}
