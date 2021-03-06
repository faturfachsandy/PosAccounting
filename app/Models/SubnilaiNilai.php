<?php

namespace App\Models;

use App\Models\Nilai;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class SubnilaiNilai extends Model
{
    protected $fillable = ['nilai_id', 'nama_subnilai', 'keterangan', 'default', 'urutan', 'berlaku_sejak', 'berlaku_hingga', 'aktif'];

    public function itemKelompokSubnilai
    {
    	return $this->hasMany(Item::class, 'id');
    }

    public function itemJenisSubnilai
    {
        return $this->hasMany(Item::class, 'id');
    }

    public function itemTipeSubnilai
    {
        return $this->hasMany(Item::class, 'id');
    }

    public function itemMerkSubnilai
    {
        return $this->hasMany(Item::class, 'id');
    }

    public function itemMadeinSubnilai
    {
        return $this->hasMany(Item::class, 'id');
    }

    public function itemGradeSubnilai
    {
        return $this->hasMany(Item::class, 'id');
    }

    public function nilai 
    {
    	return $this->belongsTo(Nilai::class, 'nilai_id');
    }
}
