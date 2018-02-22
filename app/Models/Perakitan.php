<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Gudang;
use App\Models\OrderPembelianDetail;

class Perakitan extends Model
{
    protected $fillable = [''];

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
        return $this->hasMany(OrderPembelianDetail::class, 'id_perakitan');
    }

    public function itemMany()
    {
        return $this->belongsToMany(Item::class, 'perakitan_detail', 'id_perakitan', 'id_item');
    }
}
