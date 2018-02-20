<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pembelians', function (Blueprint $table) {
            $table->increments('id_order_pembelian');
            $table->string('no_ref',50);
            $table->integer('supplier_id')->unsigned(); // foreign dari tabel person
            $table->integer('gudang_id')->unsigned(); //foreign dari tabel gudang
            $table->integer('alamat_id')->unsigned(); // foreign dari tabel alamat
            $table->integer('jangka_waktu_kredit_id')->unsigned(); // foreign dari tabel janga waktu kredit
            $table->date('tgl_dibutuhkan');
            $table->decimal('ppn',15,2);
            $table->text('keterangan');
            $table->decimal('total',15,2);
            $table->decimal('grand_total',15,2);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("supplier_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("gudang_id")->references("id_gudang")->on("gudangs")->onDelete("cascade");
            $table->foreign("alamat_id")->references("id_alamat")->on("alamats")->onDelete("cascade");
            $table->foreign("jangka_waktu_kredit_id")->references("id_jangka_waktu_kredit")->on("jangka_waktu_kredits")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pembelians');
    }
}
