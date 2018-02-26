<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPembelianDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pembelian_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_pembelian_id')->unsigned(); //foreign dari tabel order pembelian
            $table->integer('perakitan_id')->unsigned(); // foreign dari tabel perakitan
            $table->integer('item_id')->unsigned(); // foreign dari tabel item
            $table->integer('jumlah');
            $table->decimal('subtotal',15,2);
            $table->text('keterangan');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("perakitan_id")->references("id")->on("perakitans")->onDelete("cascade");
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
            $table->foreign("order_pembelian_id")->references("id")->on("order_pembelians")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pembelian_details');
    }
}
