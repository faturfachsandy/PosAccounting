<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKasKeluarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kas_keluar_details', function (Blueprint $table) {
            $table->increments('id_bbk_detail');
            $table->integer("bukti_kas_keluar_id")->unsigned(); //Foreign dari table bukti kas keluar
            $table->integer("faktur_pembelian_id")->unsigned(); //Foreign dari table faktur pembelian
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("faktur_pembelian_id")->references("id_faktur_pembelian")->on("faktur_pembelians")->onDelete("cascade");
            $table->foreign("bukti_kas_keluar_id")->references("id_bukti_kas_keluar")->on("bukti_kas_keluars")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_kas_keluar_details');
    }
}
