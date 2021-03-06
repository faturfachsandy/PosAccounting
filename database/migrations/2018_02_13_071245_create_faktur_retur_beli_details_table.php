<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturReturBeliDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_retur_beli_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("faktur_retur_beli_id")->unsigned(); //Foreign dari table faktur retur beli
            $table->integer("item_id")->unsigned(); //Foreign dari table item
            $table->integer("jumlah");
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("faktur_retur_beli_id")->references("id")->on("faktur_retur_belis")->onDelete("cascade");
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faktur_retur_beli_details');
    }
}
