<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;

class SubnilaiNilai extends Model
{
    protected $fillable = 
    ['nama_subnilai', 'keterangan', 'default', 'urutan', 'berlaku_sejak', 'berlaku_hingga', 'aktif'];

    public function nilai 
    {
    	return $this->belongsTo(Nilai::class);
    }
}
