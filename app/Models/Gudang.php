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
    protected $fillable = ['nama_gudang', 'keterangan', 'alamat_id', 'default', 'penjualan', 'aktif'];

    public function item()
    {
    	return $this->hasMany(Item::class, 'id');
    }

    public function stokOpname()
    {
    	return $this->hasMany(StokOpname::class, 'id');
    }

    public function perakitan()
    {
    	return $this->hasMany(Perakitan::class, 'id');
    }

    public function fakturReturBeli()
    {
    	return $this->hasMany(FakturReturBeli::class, 'id');
    }

    public function orderPembelian()
    {
    	return $this->hasMany(OrderPembelian::class, 'id');
    }

    public function suratJalan()
    {
    	return $this->hasMany(SuratJalan::class, 'id');
    }

    public function alamat()
    {
    	return $this->belongsTo(Alamat::class, 'alamat_id');
    }
}
