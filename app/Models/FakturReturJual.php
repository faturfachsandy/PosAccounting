<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\FakturPenjualan;
use App\Models\Karyawan;
use App\Models\JangkaWaktuKredit;
use App\Models\Item;

class FakturReturJual extends Model
{
    protected $fillable = ['tanggal', 'person_id', 'faktur_penjualan_id', 'karyawan_id', 'tipe_diskon', 'diskon', 'ppn', 'keterangan', 'jangka_waktu_kredit_id', 'jatuh_tempo'];

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

    public function item()
    {
        return $this->belongsToMany(Item::class, 'faktur_retur_jual_detail', 'faktur_rektur_jual_id', 'item_id');
    }
}
