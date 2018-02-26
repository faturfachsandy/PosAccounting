<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SalerOrder;
use App\Models\Gudang;
use App\Models\FakturPenjualan;
use App\Models\Item;
use App\User;

class SuratJalan extends Model
{
    protected $fillable = [''];

    public function fakturPenjualan()
    {
        return $this->hasMany(FakturPenjualan::class, 'id');
    }

    public function item()
    {
        return $this->belongsToMany(Item::class, 'surat_jalan_detail', 'surat_jalan_id', 'item_id');
    }

    public function salesOrder()
    {
    	return $this->belongsTo(Item::class, 'nomor_sales_order');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
