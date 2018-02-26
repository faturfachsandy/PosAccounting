<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Gudang;
use App\Models\Alamat;
use App\Models\JangkaWaktuKredit;
use App\Models\OrderPembelianDetail;

class OrderPembelian extends Model
{
    protected $fillable = [''];

    public function orderPembelianDetail()
    {
        return $this->hasOne(OrderPembelianDetail::class, 'id');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'supplier_id');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function alamat()
    {
    	return $this->belongsTo(Alamat::class, 'alamat_id');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->belongsTo(JangkaWaktuKredit::class, 'jangka_waktu_kredit_id');
    }
}
