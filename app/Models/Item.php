<?php

namespace App\Models;

use App\Models\satuan;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubnilaiNilai;
use App\Models\Gudang;
use App\Models\DetailItem;

class Item extends Model
{
    protected $fillable = [''];

    public function detailItem
    {
    	return $this->hasOne(DetailItem::class, 'id_item');
    }

    public function gudang
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function satuan
    {
    	return $this->belongsTo(Nilai::class, 'satuan_id');
    }

    public function kelompokSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'kelompok_subnilai_id');
    }

    public function jenisSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'jenis_subnilai_id');
    }

    public function tipeItemSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'tipe_item_subnilai_id');
    }

    public function merkSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'merk_subnilai_id');
    }

    public function madeinSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'madein_subnilai_id');
    }

    public function gradeSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'grade_subnilai_id');
    }
}
