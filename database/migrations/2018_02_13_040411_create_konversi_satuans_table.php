<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonversiSatuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konversi_satuans', function (Blueprint $table) {
            $table->increments('id_konversi_satuan');
            $table->integer('satuan1_id')->unsigned();// baca bawah
            $table->integer('satuan2_id')->unsigned();// foreign dari tabel satuan
            $table->integer('nilai_konversi');
            $table->text('keterangan');
            $table->boolean('aktif')->default(true);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("satuan1_id")->references("id_satuan")->on("satuans")->onDelete("cascade");
            $table->foreign("satuan2_id")->references("id_satuan")->on("satuans")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konversi_satuans');
    }
}
