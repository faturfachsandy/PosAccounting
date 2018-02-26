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
    protected $fillable = ['no_ref', 'tipe_invoice', 'customer_id', 'sales_order_id', 'surat_jalan_id'];

    public function buktiKasMasuk()
    {
    	return $this->belongsToMany(BuktiKasMasuk::class,
            'bukti_kas_masuk_detail', 'id_faktur_penjualan', 'id_bukti_kas_masuk');
    }

    public function item()
    {
    	return $this->belongsToMany(Item::class, 'faktur_penjualan_detail', 'id_faktur_penjualan', 'id_item');
    }

    public function fakturReturJual()
    {
        return $this->hasMany(FakturReturJual::class, 'id_faktur_penjualan');
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
}
