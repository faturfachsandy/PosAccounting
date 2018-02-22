<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gudang;
use App\Models\Item;

class StokOpname extends Model
{
    protected $fillable = [''];

    public function item()
    {
        return $this->belongsToMany(Item::class, 'stok_opname_detail', 'id_stok_opname', 'id_item');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }
}
