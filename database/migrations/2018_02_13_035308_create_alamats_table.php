<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipe_alamat');
            $table->string('baris_1', 50);
            $table->string('baris_2', 50);
            $table->string('kota', 25);
            $table->string('provinsi', 25);
            $table->string('negara', 25);
            $table->string('telp', 15);
            $table->string('fax', 50);
            $table->string('bank_account', 50);
            $table->boolean('bisa_kirim')->default(true);
            $table->boolean('tagihan')->default(false);
            $table->boolean('pajak')->default(false);
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
        Schema::dropIfExists('alamats');
    }
}
