<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Gudang extends Model
{
    protected $fillable = [''];

    public function item
    {
    	return $this->hasOne(Item::class);
    }
}
