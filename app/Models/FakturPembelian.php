<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UangMuka;
use App\Models\BuktiKasKeluar;
use App\Models\FakturReturBeli;
use App\Models\Item;
use App\Models\Person;
use App\Models\OrderPembelian;
use App\Models\BarangDatang;
use App\Models\JangkaWaktuKredit;
use App\User;

class FakturPembelian extends Model
{
    protected $fillable = [''];

    public function uangMuka()
    {
    	return $this->hasOne(UangMuka::class, 'id_faktur_pembelian');
    }

    public function buktiKasKeluar()
    {
    	return $this->belongsToMany(BuktiKasKeluar::class);
    }

    public function fakturReturBeli()
    {
    	return $this->hasOne(FakturReturBeli::class, 'id_faktur_pembelian');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'supplier_id');
    }

    public function orderPembelian()
    {
    	return $this->belongsTo(OrderPembelian::class, 'order_pembelian_id');
    }

    public function barangDatang()
    {
    	return $this->belongsTo(BarangDatang::class, 'barang_datang_id');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->belongsTo(JangkaWaktuKredit::class, 'jangka_waktu_kredit_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function item()
    {
        return $this->belongsToMany(Item::class);
    }
}
