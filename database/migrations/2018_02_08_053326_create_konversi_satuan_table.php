<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonversiSatuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konversi_satuan', function (Blueprint $table) {
            $table->increments('id_konversi_satuan');
            $table->integer('satuan1_id');// baca bawah
            $table->integer('satuan2_id');// foreign dari tabel satuan
            $table->integer('nilai_konversi');
            $table->text('keterangan');
            $table->boolean('aktif')->default(true);
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
        Schema::dropIfExists('konversi_satuan');
    }
}
