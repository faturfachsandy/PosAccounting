<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\FakturPenjualan;
use App\Models\Karyawan;
use App\Models\JangkaWaktuKredit;

class FakturReturJual extends Model
{
    protected $fillable = [''];

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }

    public function fakturPenjualan()
    {
    	return $this->belongsTo(FakturPenjualan::class, 'faktur_penjualan_id');
    }

    public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->belongsTo(JangkaWaktuKredit::class, 'jangka_waktu_kredit_id');
    }
}
