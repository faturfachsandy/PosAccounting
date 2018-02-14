<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKasMasukDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kas_masuk_details', function (Blueprint $table) {
            $table->increments('id_bukti_kas_masuk_detail');
            $table->integer("bukti_kas_masuk_id"); //Foreign dari table bukti kas masuk
            $table->integer("faktur_penjualan_id"); //Foreign dari table faktur pembelian
            //$table->("potongan");
            $table->boolean("lunas")->default(false);
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
        Schema::dropIfExists('bukti_kas_masuk_details');
    }
}
