<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SalesOrder;
use App\Models\FakturReturJual;
use App\Models\Person;

class Karyawan extends Model
{
    protected $fillable = [''];

    public function salesOrder()
    {
    	return $this->hasOne(SalesOrder::class, 'id');
    }

    public function fakturReturJual()
    {
    	return $this->hasMany(FakturReturJual::class, 'id');
    }

    public function person()
    {
    	return $this->hasOne(Person::class, 'id');
    }

}
