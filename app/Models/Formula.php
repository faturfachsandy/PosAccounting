<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subformula;
use App\Models\Item;

class Formula extends Model
{
    protected $fillable = ['item_id', 'satuan_item_id', 'tgl_mulai_berlaku', 'tgl_sampai_berlaku', 'tgl_sampai_berlaku', 'no_ref', 'keterangan', 'aktif'];

    public function subformula()
    {
    	return $this->hasOne(Subformula::class);
    }

    public function item()
    {
    	return $this->belongsTo(Item::class, 'item_id');
    }

    public function SatuanItem()
    {
    	return $this->belongsTo(Item::class, 'satuan_item_id');
    }
}
