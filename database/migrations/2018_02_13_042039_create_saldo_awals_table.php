<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaldoAwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saldo_awals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned(); //foreign dari tabel item
            $table->integer('stok_awal');
            $table->integer('satuan_item_id')->unsigned(); //data dari satuan id di item
            $table->decimal('hpp_awal',15,2);
            $table->decimal('subtotal',15,2);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saldo_awals');
    }
}
