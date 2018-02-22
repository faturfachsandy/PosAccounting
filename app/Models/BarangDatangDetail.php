<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\BarangDatang;
//use App\Models\Item;

class BarangDatangDetail extends Model
{
    protected $fillable = ['jumlah', 'tgl_expired'];

    // public function barangDatang()
    // {
    // 	return $this->belongsTo(BarangDatang::class, 'barang_datang_id');
    // }

    // public function item()
    // {
    // 	return $this->belongsTo(Item::class, 'item_id');
    // }
}
