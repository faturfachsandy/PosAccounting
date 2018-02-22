<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;
use App\Models\Person;
use App\Models\DetailPerson;
use App\Models\Item;

class SalesOrder extends Model
{
    protected $fillable = [''];

    public function item()
    {
        return $this->belongsToMany(Item::class, 'sales_order_detail', 'id_sales_order', 'id_item');
    }

    public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }

    public function detailPerson()
    {
    	return $this->belongsTo(DetailPerson::class, 'detail_person_id');
    }
}
