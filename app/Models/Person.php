<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;
use App\Models\JangkaWaktuKredit;
use App\Models\Account;
use App\Models\DaftarHarga;
use App\Models\SalesOrder;
use App\Models\BuktiKasMasuk;
use App\Models\FakturReturJual;
use App\Models\FakturReturBeli;
use App\Models\FakturPenjualan;
use App\Models\FakturPembelian;
use App\Models\BarangDatang;
use App\Models\OrderPembelian;

class Person extends Model
{
    protected $fillable = ['tipe_person', 'karyawan_id', 'kode_person', 'nama', 'termin_pembayaran', 'batas_tempo', 'batas_piutang', 'batas_hutang', 'rayon', 'npwp', 'tipe_diskon', 'diskon', 'keterangan', 'coa_piutang_account_id', 'tipe_harga_jual_id', 'bisa_supplier', 'bisa_customer', 'aktif'];

    public function salesOrder()
    {
        return $this->hasMany(Gudang::class, 'id');
    }

    public function FakturReturJual()
    {
        return $this->hasMany(FakturReturJual::class, 'id');
    }

    public function FakturReturBeli()
    {
        return $this->hasMany(FakturReturBeli::class, 'id');
    }

    public function buktiKasMasuk()
    {
        return $this->hasMany(BuktiKasMasuk::class, 'id');
    }

    public function fakturPenjualan()
    {
        return $this->hasMany(FakturPenjualan::class, 'id');
    }

    public function fakturPembelian()
    {
        return $this->hasMany(FakturPembelian::class, 'id');
    }

    public function orderPembelian()
    {
        return $this->hasMany(OrderPembelian::class, 'id');
    }

    public function barangDatang()
    {
        return $this->hasMany(BarangDatang::class, 'id');
    }

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
