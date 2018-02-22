<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokOpnameDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_opname_details', function (Blueprint $table) {
            $table->increments('id_stok_opname_detail');
            $table->integer('stok_opname_id')->unsigned(); // foreign dari tabel stok opname
            $table->integer('item_id')->unsigned(); // foreign dari tabel item
            $table->integer('jumlah');
            $table->text('keterangan');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id_item")->on("items")->onDelete("cascade");
            $table->foreign("stok_opname_id")->references("id_stok_opname")->on("stok_opnames")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_opname_details');
    }
}
