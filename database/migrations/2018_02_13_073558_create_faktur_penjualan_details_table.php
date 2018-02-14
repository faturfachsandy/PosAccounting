<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturPenjualanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_penjualan_details', function (Blueprint $table) {
            $table->increments('id_faktur_penjualan_detail');
            $table->integer("faktur_penjualan_id"); //Foreign dari table faktur penjualan
            $table->integer("item_id"); //Foreign dari table item
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
        Schema::dropIfExists('faktur_penjualan_details');
    }
}
