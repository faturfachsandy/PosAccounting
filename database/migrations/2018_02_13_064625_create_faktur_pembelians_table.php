<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_pembelians', function (Blueprint $table) {
            $table->increments('id_faktur_pembelian');
            $table->integer("supplier_id")->unsigned(); //Foreign dari table Person / people
            $table->integer("order_pembelian_id")->unsigned(); //Foreign dari table order pembelian
            $table->integer("barang_datang_id")->unsigned(); //Foreign dari table barang datang
            $table->date("tanggal");
            $table->integer("tipe_invoice");
            $table->integer("jangka_waktu_id")->unsigned(); //Foreign dari table jangka waktu kredit
            $table->integer("status");
            $table->integer("user_id")->unsigned(); //Foreign dari tabel user
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("supplier_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("order_pembelian_id")->references("id_order_pembelian")->on("order_pembelians")->onDelete("cascade");
            $table->foreign("barang_datang_id")->references("id_barang_datang")->on("barang_datangs")->onDelete("cascade");
            $table->foreign("jangka_waktu_id")->references("id_jangka_waktu_kredit")->on("jangka_waktu_kredits")->onDelete("cascade");
            $table->foreign("user_id")->references("id_user")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faktur_pembelians');
    }
}
