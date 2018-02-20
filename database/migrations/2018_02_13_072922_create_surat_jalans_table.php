<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_jalans', function (Blueprint $table) {
            $table->increments('id_surat_jalan');
            $table->integer("nomor_sales_order")->unsigned(); // Foreign dari table sales order
            $table->date("tanggal");
            $table->integer("gudang_id")->unsigned(); //Foreign dari table gudang
            $table->integer("status");
            $table->integer("user_id")->unsigned(); //Foreign dari table users
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("nomor_sales_order")->references("id_sales_order")->on("sales_orders")->onDelete("cascade");
            $table->foreign("gudang_id")->references("id_gudang")->on("gudangs")->onDelete("cascade");
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
        Schema::dropIfExists('surat_jalans');
    }
}
