<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubnilaiNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subnilai_nilai', function (Blueprint $table) {
            $table->increments('id_subnilai');
            $table->integer('nilai_id'); //foreign dari tabel nilai
            $table->string('nama_subnilai', 50);
            $table->text('keterangan');
            $table->boolean('default')->default(false);
            $table->integer('urutan');
            $table->date('berlaku_sejak');
            $table->date('berlaku_hingga');
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
        Schema::dropIfExists('subnilai_nilai');
    }
}
