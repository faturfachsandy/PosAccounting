<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_items', function (Blueprint $table) {
            $table->increments('id_detail_item');
            $table->integer('item_id'); //foreign dari tabel item
            $table->integer('konversi_satuan_id'); //foreign dari tabel konversi satuan
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
        Schema::dropIfExists('detail_items');
    }
}
