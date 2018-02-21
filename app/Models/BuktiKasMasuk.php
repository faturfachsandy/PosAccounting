<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BuktiKasMasukDetail;
use App\Models\Account;
use App\Models\Person;

class BuktiKasMasuk extends Model
{
    protected $fillable = [''];

    public function buktiKasMasukDetail()
    {
    	return $this->hasOne(BuktiKasMasukDetail::class, 'id_bukti_kas_masuk');
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
