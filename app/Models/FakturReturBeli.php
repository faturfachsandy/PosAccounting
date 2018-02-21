<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\FakturPembelian;
use App\Models\Gudang;
use App\Models\JangkaWaktuKredit;

class FakturReturBeli extends Model
{
    protected $fillable = [''];

    public function fakturPembelian()
    {
    	return $this->belongsTo(FakturPembelian::class, 'faktur_pembelian_id');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->belongsTo(JangkaWaktuKredit::class, 'jangka_waktu_kredit_id');
    }
}
