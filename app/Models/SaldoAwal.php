<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class SaldoAwal extends Model
{
    protected $fillable = [''];

    public function item()
    {
    	return $this->belongsTo(Item::class, 'item_id');
    }

    public function satuanItem()
    {
    	return $this->belongsTo(Item::class, 'satuan_item_id');
    }
}
