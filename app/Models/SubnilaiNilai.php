<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class SubnilaiNilai extends Model
{
    protected $fillable = 
    ['nama_subnilai', 'keterangan', 'default', 'urutan', 'berlaku_sejak', 'berlaku_hingga', 'aktif'];

    public function itemKelompokSubnilai
    {
    	return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function itemJenisSubnilai
    {
        return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function itemTipeSubnilai
    {
        return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function itemMerkSubnilai
    {
        return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function itemMadeinSubnilai
    {
        return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function itemGradeSubnilai
    {
        return $this->hasMany(Item::class, 'id_subnilai');
    }

    public function nilai 
    {
    	return $this->belongsTo(Nilai::class, 'nilai_id');
    }
}
