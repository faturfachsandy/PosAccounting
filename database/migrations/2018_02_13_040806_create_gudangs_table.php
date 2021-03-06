<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_gudang', 50);
            $table->text('keterangan');
            $table->integer('alamat_id')->unsigned(); //foreign dari tabel alamat
            $table->boolean('default')->default(false);
            $table->boolean('penjualan')->default(true);
            $table->boolean('aktif')->default(true);
            $table->timestamps();
            
            //-------- Relasi ----------
            $table->foreign("alamat_id")->references("id")->on("alamats")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudangs');
    }
}
