<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerakitansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perakitans', function (Blueprint $table) {
            $table->increments('id_perakitan');
            $table->date('tanggal');
            $table->string('no_ref',50);
            $table->decimal('hpp',15,2);
            $table->integer('item_id'); // foreign dari tabel item
            $table->integer('jumlah_buat');
            $table->integer('gudang_id'); // foreign dari tabel gudang
            $table->text('keterangan');
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
        Schema::dropIfExists('perakitans');
    }
}
