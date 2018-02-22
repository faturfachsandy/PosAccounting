<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Formula;

class Subformula extends Model
{
    protected $fillable = [''];

    public function formula()
    {
    	return $this->belongsTo(Formula::class, 'formula_id');
    }

    public function item()
    {
    	return $this->belongsTo(Item::class, 'item_id');
    }

    public function satuanItem()
    {
    	return $this->belongsTo(Item::class, 'satuan_item_id');
    }
}
