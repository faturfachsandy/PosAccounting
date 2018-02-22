<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gudang;
use App\Models\OrderPembelian;
use App\Models\DetailPerson;

class Alamat extends Model
{
    protected $fillable = [''];

    public function gudang()
    {
    	return $this->hasOne(Gudang::class, 'id_alamat');
    }

    public function orderPembelian()
    {
    	return $this->hasMany(OrderPembelian::class, 'id_alamat');
    }

    public function detailPerson()
    {
    	return $this->hasMany(DetailPerson::class, 'id_alamat');
    }
}
