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
            'bukti_kas_masuk_detail', 'faktur_penjualan_id', 'bukti_kas_masuk_id');
    }

    public function item()
    {
    	return $this->belongsToMany(Item::class, 'faktur_penjualan_detail', 'faktur_penjualan_id', 'item_id');
    }

    public function fakturReturJual()
    {
        return $this->hasMany(FakturReturJual::class, 'id');
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
