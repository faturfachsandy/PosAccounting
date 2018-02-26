<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned(); //foreign dari tabel item
            $table->decimal('harga_beli',15,2);
            $table->integer('daftar_harga_detail_id')->unsigned(); //foreign dari tabel daftar harga detail
            $table->boolean('tipe_diskon')->default(false);
            $table->integer('diskon');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
            $table->foreign("daftar_harga_detail_id")->references("id")->on("daftar_harga_details")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_hargas');
    }
}
