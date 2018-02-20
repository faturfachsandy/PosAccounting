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
            $table->integer("supplier")->unsigned(); //Foreign dari tabel person / people
            $table->integer("status");
            $table->integer("user_id")->unsigned(); //Foreign dari tabel users
            $table->integer("account_id")->unsigned(); // Foreign dari tabel account
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("supplier")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("user_id")->references("id_user")->on("users")->onDelete("cascade");
            $table->foreign("account_id")->references("id_account")->on("accounts")->onDelete("cascade");
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
