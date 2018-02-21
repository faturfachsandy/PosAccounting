<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\Item;

class AdjustmentNilai extends Model
{
    protected $fillable = [''];

    public function item()
    {
    	return $this->belongsToMany(Item::class);
    }

    public function account()
    {
    	return $this->belongsTo(Account::class, 'account_id');
    }
}
