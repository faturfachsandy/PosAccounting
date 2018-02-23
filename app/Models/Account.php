<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AdjustmentNilai;
use App\Models\Person;
use App\Models\JangkaWaktuKredit;
use App\Models\BarangDatang;
use App\Models\BuktiKasKeluar;

class Account extends Model
{
    protected $fillable = ['nama_account', 'kode_parent', 'keterangan'];

    public function adjusmnetNilai()
    {
    	return $this->hasMany(AdjusmentNilai::class, 'id_account');
    }

    public function person()
    {
    	return $this->hasOne(Person::class, 'id_account');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->hasOne(jangkaWaktuKredit::class, 'id_account');
    }

    public function barangDatang()
    {
    	return $this->hasMany(BarangDatang::class, 'id_account');
    }

    public function buktiKasKeluar()
    {
    	return $this->hasMany(BuktiKasKeluar::class, 'id_account');
    }
}
