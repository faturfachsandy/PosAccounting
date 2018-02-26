<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SalesOrder;
use App\Models\FakturReturJual;
use App\Models\Person;

class Karyawan extends Model
{
    protected $fillable = ['nama', 'nama_lengkap', 'keterangan', 'bagian', 'mulai_kerja', 'akhir_kerja'];

    public function salesOrder()
    {
    	return $this->hasOne(SalesOrder::class, 'id_karyawan');
    }

    public function fakturReturJual()
    {
    	return $this->hasMany(FakturReturJual::class, 'id_karyawan');
    }

    public function person()
    {
    	return $this->hasOne(Person::class, 'id_karyawan');
    }

}
