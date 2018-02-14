<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangDatangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_datangs', function (Blueprint $table) {
            $table->increments('id_barang_datang');
            $table->date("tgl_barang_datang");
            $table->string("no_ref", 50);
            $table->integer("supplier"); //Foreign dari tabel person / people
            $table->integer("status");
            $table->integer("user_id"); //Foreign dari tabel users
            $table->integer("account_id"); // Foreign dari tabel account
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
        Schema::dropIfExists('barang_datangs');
    }
}
