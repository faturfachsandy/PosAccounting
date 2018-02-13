<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pembelian', function (Blueprint $table) {
            $table->increments('id_order_pembelian');
            $table->string('no_ref',50);
            $table->integer('supplier_id'); // foreign dari tabel person
            $table->integer('gudang_id'); //foreign dari tabel gudang
            $table->integer('alamat_id'); // foreign dari tabel alamat
            $table->integer('jangka_waktu_kredit_id'); // foreign dari tabel janga waktu kredit
            $table->date('tgl_dibutuhkan');
            $table->decimal('ppn',15,2);
            $table->text('keterangan');
            $table->decimal('total',15,2);
            $table->decimal('grand_total',15,2);
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
        Schema::dropIfExists('order_pembelian');
    }
}
