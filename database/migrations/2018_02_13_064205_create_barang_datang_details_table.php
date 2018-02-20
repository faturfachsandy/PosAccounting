<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangDatangDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_datang_details', function (Blueprint $table) {
            $table->increments('id_barang_datang_id');
            $table->integer("barang_datang_id")->unsigned(); //Foreign dari tabel barang datang
            $table->integer("jumlah");
            $table->date("tgl_expired");
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("barang_datang_id")->references("id_barang_datang")->on("barang_datangs")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_datang_details');
    }
}
