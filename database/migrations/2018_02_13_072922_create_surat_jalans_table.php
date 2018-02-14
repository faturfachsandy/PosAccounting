<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_jalans', function (Blueprint $table) {
            $table->increments('id_surat_jalan');
            $table->integer("nomor_sales_order"); // Foreign dari table sales order
            $table->date("tanggal");
            $table->integer("gudang_id"); //Foreign dari table gudang
            $table->integer("status");
            $table->integer("user_id"); //Foreign dari table users
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
        Schema::dropIfExists('surat_jalans');
    }
}
