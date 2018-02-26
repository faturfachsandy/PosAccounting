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
    protected $fillable = ['kode_item', 'gudang_id', 'nama_item', 'nama_item2', 'deskripsi', 'barcode', 'satuan_id', 'kelompok_subnilai_id', 'lokasi', 'minimum_stok', 'keterangan', 'jenis_subnilai_id', 'tipe_item_subnilai_id', 'merk_subnilai_id', 'madein_subnilai_id', 'grade_subnilai_id', 'gambar', 'hpp_awal', 'rakitan', 'transaksi', 'aktif'];

    public function barangDatang()
    {
        return $this->belongsToMany(BarangDatang::class, 'barang_datang_detail', 'id_item', 'id_barang_datang');
    }

    public function orderPembelianDetail()
    {
        return $this->hasMany(OrderPembelianDetail::class, 'id_item');
    }

    public function fakturReturJual()
    {
        return $this->belongsToMany(FakturReturJual::class, 'faktur_retur_jual_detail', 'id_item', 'id_faktur_retur_jual');
    }

    public function fakturReturBeli()
    {
        return $this->belongsToMany(FakturReturBeli::class, 'faktur_retur_Beli_detail', 'id_item', 'id_faktur_retur_beli');
    }

    public function fakturPenjualan()
    {
        return $this->belongsToMany(FakturPenjualan::class, 'faktur_penjualan_detail', 'id_item', 'id_faktur_penjualan');
    }

    public function fakturPembelian()
    {
        return $this->belongsToMany(FakturPembelian::class, 'faktur_pembelian_detail', 'id_item', 'id_faktur_pembelian');
    }

    public function konversiSatuan()
    {
        return $this->belongsToMany(KonversiSatuan::class, 'detail_item', 'id_item', 'id_konversi_satuan');
    }

    public function adjustmentNilai()
    {
        return $this->belongsToMany(AdjustmentNilai::class, 'adjustment_nilai_detail', 'id_item', 'id_ajustment_nilai');
    }

    public function perakitanDetail()
    {
        return $this->belongsToMany(Perakitan::class, 'perakitan_detail', 'id_item', 'id_perakitan');
    }

    public function stokOpname()
    {
        return $this->belongsToMany(StokOpname::class, 'stok_opname_detail', 'id_item', 'id_stok_opname');
    }

    public function suratJalan()
    {
        return $this->belongsToMany(SuratJalan::class, 'surat_jalan_detail', 'id_item', 'id_surat_jalan');
    }

    public function salesOrder()
    {
        return $this->belongsToMany(SalesOrder::class, 'sales_order_detail', 'id_item', 'id_sales_order');
    }

    public function detailItem()
    {
        return $this->hasOne(DetailItem::class, 'id_item');
    }

    public function formula()
    {
        return $this->hasOne(Formula::class, 'id_item');
    }

    public function subFormula()
    {
        return $this->hasOne(Subformula::class, 'id_item');
    }

    public function satuanItemFormula()
    {
        return $this->hasOne(Formula::class, 'id_item');
    }

    public function satuanItemSubFormula()
    {
        return $this->hasOne(Subformula::class, 'id_item');
    }

    public function satuanItemSaldoAwal()
    {
        return $this->hasOne(SaldoAwal::class, 'id_item');
    }

    public function perakitan()
    {
        return $this->hasMany(Perakitan::class, 'id_item');
    }

    public function saldoAwal()
    {
        return $this->hasOne(SaldoAwal::class, 'id_item');
    }

    public function daftarHarga()
    {
    	return $this->hasOne(DaftarHarga::class, 'id_item');
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
