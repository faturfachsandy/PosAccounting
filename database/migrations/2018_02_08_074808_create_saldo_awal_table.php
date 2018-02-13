<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldoAwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_awal', function (Blueprint $table) {
            $table->increments('id_saldo_awal');
            $table->integer('item_id'); //foreign dari tabel item
            $table->integer('stok_awal');
            $table->integer('satuan_item_id'); //data dari satuan id di item
            $table->decimal('hpp_awal',15,2);
            $table->decimal('subtotal',15,2);
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
        Schema::dropIfExists('saldo_awal');
    }
}
