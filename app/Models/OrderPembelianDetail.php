<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perakitan;
use App\Models\Item;
use App\Models\OrderPembelian;

class OrderPembelianDetail extends Model
{
    protected $fillable = [''];

    public function orderPembelian()
    {
        return $this->belongsTo(OrderPembelian::class, 'order_pembelian_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function perakitan()
    {
        return $this->belongsTo(Perakitan::class, 'perakitan_id');
    }
}
