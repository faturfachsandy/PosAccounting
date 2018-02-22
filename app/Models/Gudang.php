<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Alamat;
use App\Models\StokOpname;
use App\Models\Perakitan;
use App\Models\FakturReturBeli;
use App\Models\OrderPembelian;
use App\Models\SuratJalan;

class Gudang extends Model
{
    protected $fillable = [''];

    public function item()
    {
    	return $this->hasMany(Item::class, 'id_gudang');
    }

    public function stokOpname()
    {
    	return $this->hasMany(StokOpname::class, 'id_gudang');
    }

    public function perakitan()
    {
    	return $this->hasMany(Perakitan::class, 'id_gudang');
    }

    public function fakturReturBeli()
    {
    	return $this->hasMany(FakturReturBeli::class, 'id_gudang');
    }

    public function orderPembelian()
    {
    	return $this->hasMany(OrderPembelian::class, 'id_gudang');
    }

    public function suratJalan()
    {
    	return $this->hasMany(SuratJalan::class, 'id_gudang');
    }

    public function alamat()
    {
    	return $this->belongsTo(Alamat::class, 'alamat_id');
    }
}
