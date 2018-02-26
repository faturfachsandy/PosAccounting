<?php

namespace App\Models;

use App\Models\satuan;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubnilaiNilai;
use App\Models\Gudang;
use App\Models\DetailItem;
use App\Models\BarangDatang;
use App\Models\Perakitan;
use App\Models\FakturReturJual;
use App\Models\FakturReturBeli;
use App\Models\FakturPenjualan;
use App\Models\FakturPembelian;
use App\Models\SuratJalan;
use App\Models\KonversiSatuan;
use App\Models\DaftarHarga;
use App\Models\Formula;
use App\Models\Subformula;
use App\Models\SalesOrder;
use App\Models\StokOpname;
use App\Models\AdjustmentNilai;
use App\Models\SaldoAwal;

class Item extends Model
{
    protected $fillable = [''];

    public function barangDatang()
    {
        return $this->belongsToMany(BarangDatang::class, 'barang_datang_detail', 'item_id', 'barang_datang_id');
    }

    public function orderPembelianDetail()
    {
        return $this->hasMany(OrderPembelianDetail::class, 'id');
    }

    public function fakturReturJual()
    {
        return $this->belongsToMany(FakturReturJual::class, 'faktur_retur_jual_detail', 'item_id', 'faktur_retur_jual_id');
    }

    public function fakturReturBeli()
    {
        return $this->belongsToMany(FakturReturBeli::class, 'faktur_retur_Beli_detail', 'item_id', 'faktur_retur_beli_id');
    }

    public function fakturPenjualan()
    {
        return $this->belongsToMany(FakturPenjualan::class, 'faktur_penjualan_detail', 'item_id', 'faktur_penjualan_id');
    }

    public function fakturPembelian()
    {
        return $this->belongsToMany(FakturPembelian::class, 'faktur_pembelian_detail', 'item_id', 'faktur_pembelian_id');
    }

    public function konversiSatuan()
    {
        return $this->belongsToMany(KonversiSatuan::class, 'detail_item', 'item_id', 'konversi_satuan_id');
    }

    public function adjustmentNilai()
    {
        return $this->belongsToMany(AdjustmentNilai::class, 'adjustment_nilai_detail', 'item_id', 'ajustment_nilai_id');
    }

    public function perakitanDetail()
    {
        return $this->belongsToMany(Perakitan::class, 'perakitan_detail', 'item_id', 'perakitan_id');
    }

    public function stokOpname()
    {
        return $this->belongsToMany(StokOpname::class, 'stok_opname_detail', 'item_id', 'stok_opname_id');
    }

    public function suratJalan()
    {
        return $this->belongsToMany(SuratJalan::class, 'surat_jalan_detail', 'item_id', 'surat_jalan_id');
    }

    public function salesOrder()
    {
        return $this->belongsToMany(SalesOrder::class, 'sales_order_detail', 'item_id', 'sales_order_id');
    }

    public function detailItem()
    {
        return $this->hasOne(DetailItem::class, 'id');
    }

    public function formula()
    {
        return $this->hasOne(Formula::class, 'id');
    }

    public function subFormula()
    {
        return $this->hasOne(Subformula::class, 'id');
    }

    public function satuanItemFormula()
    {
        return $this->hasOne(Formula::class, 'id');
    }

    public function satuanItemSubFormula()
    {
        return $this->hasOne(Subformula::class, 'id');
    }

    public function satuanItemSaldoAwal()
    {
        return $this->hasOne(SaldoAwal::class, 'id');
    }

    public function perakitan()
    {
        return $this->hasMany(Perakitan::class, 'id');
    }

    public function saldoAwal()
    {
        return $this->hasOne(SaldoAwal::class, 'id');
    }

    public function daftarHarga()
    {
    	return $this->hasOne(DaftarHarga::class, 'id');
    }

    public function gudang()
    {
    	return $this->belongsTo(Gudang::class, 'gudang_id');
    }

    public function satuan()
    {
    	return $this->belongsTo(Nilai::class, 'satuan_id');
    }

    public function kelompokSubnilai()
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'kelompok_subnilai_id');
    }

    public function jenisSubnilai()
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'jenis_subnilai_id');
    }

    public function tipeItemSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'tipe_item_subnilai_id');
    }

    public function merkSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'merk_subnilai_id');
    }

    public function madeinSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'madein_subnilai_id');
    }

    public function gradeSubnilai
    {
    	return $this->belongsTo(SubnilaiNilai::class, 'grade_subnilai_id');
    }
}
