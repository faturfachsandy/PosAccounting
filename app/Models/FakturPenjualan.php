<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BuktiKasMasuk;
use App\Models\FakturReturJual;
use App\Models\Person;
use App\Models\SalesOrder;
use App\Models\SuratJalan;
use App\Models\Item;

class FakturPenjualan extends Model
{
    protected $fillable = [''];

    public function buktiKasMasuk()
    {
    	return $this->belongsToMany(BuktiKasMasuk::class);
    }

    public function fakturReturJual()
    {
    	return $this->hasOne(FakturReturJual::class, 'id_faktur_penjualan');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'customer_id');
    }

    public function salesOrder()
    {
    	return $this->belongsTo(SalesOrder::class, 'sales_order_id');
    }

    public function suratJalan()
    {
    	return $this->belongsTo(SuratJalan::class, 'surat_jalan_id');
    }

    public function item()
    {
    	return $this->belongsToMany(Item::class);
    }
}
