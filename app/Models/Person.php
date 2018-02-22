<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;
use App\Models\JangkaWaktuKredit;
use App\Models\Account;
use App\Models\DaftarHarga;

class Person extends Model
{
    protected $fillable = [''];

    public function karyawan()
    {
    	return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function jangkaWaktuKredit()
    {
    	return $this->belongsTo(JangkaWaktuKredit::class, 'termin_pembayaran');
    }

    public function account()
    {
    	return $this->belongsTo(Account::class, 'coa_piutang_account_id');
    }

    public function daftarHarga()
    {
    	return $this->belongsTo(DaftarHarga::class, 'tipe_harga_jual_id');
    }
}
