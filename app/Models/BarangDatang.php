<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BarangDatangDetail;
use App\Models\FakturPembelian;
use App\Models\Person;
use App\Models\Account;
use App\User;
use App\Models\Item;


class BarangDatang extends Model
{
    protected $fillable = [''];

    // public function barangDatangDetail()
    // {
    // 	return $this->hasMany(BarangDatangDetail::class, 'id_barang_datang');
    // }

    public function fakturPembelian()
    {
    	return $this->hasOne(FakturPembelian::class, 'id_barang_datang');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'supplier');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function account()
    {
    	return $this->belongsTo(Account::class, 'account_id');
    }

    public function item()
    {
        return $this->belongsToMany(Item::class, 'barang_datang_detail', 'id_barang_datang', 'id_item');
    }
}
