<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class SubnilaiNilai extends Model
{
    protected $fillable = 
    ['nama_subnilai', 'keterangan', 'default', 'urutan', 'berlaku_sejak', 'berlaku_hingga', 'aktif'];

    public function item
    {
    	return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function nilai 
    {
    	return $this->belongsTo(Nilai::class, 'nilai_id');
    }
}
