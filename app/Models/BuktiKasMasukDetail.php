<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\BuktiKasMasuk;
// use App\Models\FakturPenjualan;

class BuktiKasMasukDetail extends Model
{
    protected $fillable = ['potongan', 'lunas'];

    // public function buktiKasMasuk()
    // {
    // 	return $this->belongsTo(BuktiKasMasuk::class, 'bukti_kas_masuk_id');
    // }

    // public function fakturPenjualan()
    // {
    // 	return $this->belongsTo(FakturPenjualan::class, 'faktur_penjualan_id');
    // }
}
