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
            $table->increments('id');
            $table->integer("faktur_pembelian_id")->unsigned(); //Foreign dari table faktur pembelian
            $table->integer("item_id")->unsigned(); //Foreign dari table item
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("faktur_pembelian_id")->references("id")->on("faktur_pembelians")->onDelete("cascade");
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
        Schema::dropIfExists('faktur_pembelian_details');
    }
}
