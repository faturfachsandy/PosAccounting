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
            $table->integer("bukti_kas_masuk_id")->unsigned(); //Foreign dari table bukti kas masuk
            $table->integer("faktur_penjualan_id")->unsigned(); //Foreign dari table faktur pembelian
            $table->integer("potongan");
            $table->boolean("lunas")->default(false);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("bukti_kas_masuk_id")->references("id_bukti_kas_masuk")->on("bukti_kas_masuks")->onDelete("cascade");
            $table->foreign("faktur_penjualan_id")->references("id_faktur_penjualan")->on("faktur_penjualans")->onDelete("cascade");
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
