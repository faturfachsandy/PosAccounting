<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturReturJualDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_retur_jual_details', function (Blueprint $table) {
            $table->increments('id_faktur_retur_jual_detail');
            $table->integer("faktur_retur_jual_id"); //Foreign dari table faktur retur jual
            $table->integer("item_id"); //Foreign dari table item
            $table->integer("jumlah");
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
        Schema::dropIfExists('faktur_retur_jual_details');
    }
}
