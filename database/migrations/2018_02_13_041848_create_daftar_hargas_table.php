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
            $table->increments('id_daftar_harga');
            $table->integer('item_id'); //foreign dari tabel item
            $table->decimal('harga_beli',15,2);
            $table->integer('daftar_harga_detail_id'); //foreign dari tabel daftar harga detail
            $table->boolean('tipe_diskon')->default(false);
            $table->integer('diskon');
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
        Schema::dropIfExists('daftar_hargas');
    }
}
