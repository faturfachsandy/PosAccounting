<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FakturPembelian;

class UangMuka extends Model
{
    protected $fillable = ['keterangan'];

    public function fakturPembelian()
    {
    	return $this->belongsTo(FakturPembelian::class, 'faktur_pembelian_id');
    }
}
