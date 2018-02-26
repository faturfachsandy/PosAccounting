<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FakturPenjualan;
use App\Models\Account;
use App\Models\Person;

class BuktiKasMasuk extends Model
{
    protected $fillable = ['kas_id', 'person_id', 'no_ref', 'tanggal', 'keterangan', 'total', 'tanggal_jatuh_tempo', 'no_check_giro'];

    public function fakturPenjualan()
    {
    	return $this->belongsToMany(FakturPenjualan::class,
            'bukti_kas_masuk_detail', 'bukti_kas_masuk_id', 'faktur_penjualan_id');
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
