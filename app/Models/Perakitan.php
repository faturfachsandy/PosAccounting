<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Gudang;
use App\Models\OrderPembelianDetail;

class Perakitan extends Model
{
    protected $fillable = ['tanggal', 'no_ref', 'hpp', 'item_id', 'jumlah_buat', 'gudang_id', 'keterangan'];

    public function item()
    {
    	return $this->belongsTo(Item::class, 'item_id');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function orderPembelianDetail()
    {
        return $this->hasMany(OrderPembelianDetail::class, 'id');
    }

    public function itemMany()
    {
        return $this->belongsToMany(Item::class, 'perakitan_detail', 'perakitan_id', 'item_id');
    }
}
