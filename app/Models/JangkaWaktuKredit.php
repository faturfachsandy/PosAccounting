<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\FakturReturJual;
use App\Models\FakturReturBeli;
use App\Models\OrderPembelian;
use App\Models\FakturPembelian;

class JangkaWaktuKredit extends Model
{
    protected $fillable = [''];

    public function account()
    {
    	return $this->belongsTo(Account::class, 'account_id');
    }

    public function fakturReturJual()
    {
    	return $this->hasMany(FakturReturJual::class, 'id');
    }

    public function fakturReturBeli()
    {
    	return $this->hasMany(FakturReturBeli::class, 'id');
    }

    public function orderPembelian()
    {
    	return $this->hasMany(OrderPembelian::class, 'id');
    }

    public function fakturPembelian()
    {
    	return $this->hasMany(FakturPembelian::class, 'id');
    }
}
