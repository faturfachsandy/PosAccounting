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
            $table->increments('id');
            $table->integer('item_id')->unsigned(); //foreign dari tabel item
            $table->integer('konversi_satuan_id')->unsigned(); //foreign dari tabel konversi satuan
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
            $table->foreign("konversi_satuan_id")->references("id")->on("konversi_satuans")->onDelete("cascade");
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
