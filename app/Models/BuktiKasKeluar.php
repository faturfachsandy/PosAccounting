<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\UangMuka;
use App\Models\FakturPembelian;

class BuktiKasKeluar extends Model
{
    protected $fillable = [''];

    public function account()
    {
    	return $this->belongsTo(BarangDatang::class, 'kas_id');
    }

    public function uangMuka()
    {
    	return $this->belongsTo(UangMuka::class, 'uang_muka_id');
    }

    public function fakturPembelian()
    {
    	return $this->belongsToMany(FakturPembelian::class, 
            'bukti_kas_keluar_detail', 'id_bukti_kas_keluar', 'id_faktur_pembelian');
    }
}
