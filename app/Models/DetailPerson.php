<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SalesOrder;
use App\Models\Person;
use App\Models\Alamat;

class DetailPerson extends Model
{
    protected $fillable = [''];

    public function salesOrder()
    {
    	return $this->hasOne(SalesOrder::class, 'id_detail_person');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }

    public function alamat()
    {
    	return $this->belongsTo(Alamat::class, 'alamat_id');
    }
}
