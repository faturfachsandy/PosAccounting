<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FakturPenjualan;
use App\Models\Account;
use App\Models\Person;

class BuktiKasMasuk extends Model
{
    protected $fillable = [''];

    public function fakturPenjualan()
    {
    	return $this->belongsToMany(FakturPenjualan::class,
            'bukti_kas_masuk_detail', 'id_bukti_kas_masuk', 'id_faktur_penjualan');
    }

    public function account()
    {
    	return $this->belongsTo(Account::class, 'kas_id');
    }

    public function person()
    {
    	return $this->belongsTo(Person::class, 'person_id');
    }
}
