<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Item;
//use App\Models\AdjustmentNilaiDetail;

class AdjustmentNilai extends Model
{
    protected $fillable = ['tanggal', 'no_ref', 'account_id', 'keterangan'];

    public function item()
    {
    	return $this->belongsToMany(Item::class, 'adjustment_nilai_detail', 'adjustment_nilai_id', 'item_id');
    }

    public function account()
    {
    	return $this->belongsTo(Account::class, 'account_id');
    }
}
