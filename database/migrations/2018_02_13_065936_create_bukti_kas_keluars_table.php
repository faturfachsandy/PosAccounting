<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKasKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kas_keluars', function (Blueprint $table) {
            $table->increments('id_bukti_kas_keluar');
            $table->integer("kas_id"); //Foreign dari table account
            $table->string("no_ref", 50);
            $table->date("tanggal");
            $table->string("no_check",50);
            $table->text("keterangan");
            $table->decimal("total",15,2);
            $table->integer("uang_muka_id"); //Foreign dari table uang muka
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
        Schema::dropIfExists('bukti_kas_keluars');
    }
}
