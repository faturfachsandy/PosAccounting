<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id_item');
            $table->string('kode_item', 50)->index();
            $table->integer('gudang_id'); //foreign dari tabel gudang
            $table->string('nama_item', 50);
            $table->string('nama_item2', 20);
            $table->string('deskripsi', 50);
            $table->string('barcode', 30);
            $table->integer('satuan_id'); //foreign dari tabel satuan
            $table->integer('kelompok_subnilai_id')->nullable(); //foreign dari tabel subnilai nilai
            $table->string('lokasi', 50);
            $table->integer('minimum_stok');
            $table->text('keterangan');
            $table->integer('jenis_subnilai_id')->nullable();//
            $table->integer('tipe_item_subnilai_id')->nullable();//
            $table->integer('merk_subnilai_id')->nullable(); // foreign dari tabel subnilai
            $table->integer('madein_subnilai_id')->nullable();//
            $table->integer('grade_subnilai_id')->nullable();//
            $table->string('gambar', 50);
            $table->integer('hpp_awal');
            $table->boolean('rakitan')->default(false);
            $table->boolean('transaksi')->default(false);
            $table->boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
