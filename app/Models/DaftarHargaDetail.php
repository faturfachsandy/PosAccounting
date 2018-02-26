<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DaftarHarga;

class DaftarHargaDetail extends Model
{
    protected $fillable = ['harga_jual', 'keterangan'];

    public function daftarHarga()
    {
    	return $this->hasOne(DaftarHarga::class, 'id');
    }
}
