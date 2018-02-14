<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_pembelians', function (Blueprint $table) {
            $table->increments('id_faktur_pembelian');
            $table->integer("supplier_id"); //Foreign dari table Person / people
            $table->integer("order_pembelian_id"); //Foreign dari table order pembelian
            $table->integer("barang_datang_id"); //Foreign dari table barang datang
            $table->date("tanggal");
            $table->integer("tipe_invoice");
            $table->integer("jangka_waktu_id"); //Foreign dari table jangka waktu kredit
            $table->integer("status");
            $table->integer("user_id"); //Foreign dari tabel user
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
        Schema::dropIfExists('faktur_pembelians');
    }
}
