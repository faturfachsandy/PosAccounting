<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id_item');
            $table->string('kode_item', 50)->index();
            $table->integer('gudang_id')->unsigned(); //foreign dari tabel gudang
            $table->string('nama_item', 50);
            $table->string('nama_item2', 20);
            $table->string('deskripsi', 50);
            $table->string('barcode', 30);
            $table->integer('satuan_id')->unsigned(); //foreign dari tabel satuan
            $table->integer('kelompok_subnilai_id')->nullable()->unsigned(); //foreign dari tabel subnilai nilai
            $table->string('lokasi', 50);
            $table->integer('minimum_stok');
            $table->text('keterangan');
            $table->integer('jenis_subnilai_id')->nullable()->unsigned();//
            $table->integer('tipe_item_subnilai_id')->nullable()->unsigned();//
            $table->integer('merk_subnilai_id')->nullable()->unsigned(); // foreign dari tabel subnilai
            $table->integer('madein_subnilai_id')->nullable()->unsigned();//
            $table->integer('grade_subnilai_id')->nullable()->unsigned();//
            $table->string('gambar', 50);
            $table->integer('hpp_awal');
            $table->boolean('rakitan')->default(false);
            $table->boolean('transaksi')->default(false);
            $table->boolean('aktif')->default(true);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("gudang_id")->references("id_gudang")->on("gudangs")->onDelete("cascade");
            $table->foreign("satuan_id")->references("id_satuan")->on("satuans")->onDelete("cascade");
            $table->foreign("kelompok_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");
            $table->foreign("jenis_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");
            $table->foreign("tipe_item_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");
            $table->foreign("merk_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");
            $table->foreign("madein_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");
            $table->foreign("grade_subnilai_id")->references("id_subnilai")->on("subnilai_nilais")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
