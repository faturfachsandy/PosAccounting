<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubnilaiNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subnilai_nilais', function (Blueprint $table) {
            $table->increments('id_subnilai');
            $table->integer('nilai_id')->unsigned(); //foreign dari tabel nilai
            $table->string('nama_subnilai', 50);
            $table->text('keterangan');
            $table->boolean('default')->default(false);
            $table->integer('urutan');
            $table->date('berlaku_sejak');
            $table->date('berlaku_hingga');
            $table->boolean('aktif')->default(true);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("nilai_id")->references("id_nilai")->on("nilais")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subnilai_nilais');
    }
}
