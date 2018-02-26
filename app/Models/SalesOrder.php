<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;
use App\Models\Person;
use App\Models\DetailPerson;
use App\Models\Item;
use App\Models\FakturPenjualan;
use App\Models\SuratJalan;

class SalesOrder extends Model
{
    protected $fillable = ['tanggal', 'karyawan_id', 'person_id', 'detail_person_id', 'jangka_waktu_kredit_id', 'tanggal_dibutuhkan', 'no_ref', 'tipe_diskon', 'diskon', 'ppn', 'keterangan', 'grand_total'];

    public function item()
    {
        return $this->belongsToMany(Item::class, 'sales_order_detail', 'id_sales_order', 'id_item');
    }

    public function suratJalan()
    {
        return $this->hasMany(SuratJalan::class, 'id_sales_order');
    }

    public function fakturPenjualan()
    {
        return $this->hasMany(FakturPenjualan::class, 'id_sales_order');
    }

    public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }

    public function detailPerson()
    {
    	return $this->belongsTo(DetailPerson::class, 'detail_person_id');
    }
}
