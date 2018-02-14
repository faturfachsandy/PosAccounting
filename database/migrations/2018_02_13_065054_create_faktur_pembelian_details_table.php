<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturPembelianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_pembelian_details', function (Blueprint $table) {
            $table->increments('id_faktur_pembelian_detail');
            $table->integer("faktur_pembelian_id"); //Foreign dari table faktur pembelian
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
        Schema::dropIfExists('faktur_pembelian_details');
    }
}
