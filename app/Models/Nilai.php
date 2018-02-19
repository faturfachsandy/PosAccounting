<?php

namespace App\Models;

use App\Models\SubnilaiNilai;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['nama_nilai', 'keterangan'];

    public function subnilaiNilai 
    {
    	return $this->hasOne(SubnilaiNilai::class); //test
    }
}
