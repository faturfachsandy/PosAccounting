<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerakitanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perakitan_details', function (Blueprint $table) {
            $table->increments('id_perakitan_detail');
            $table->integer('perakitan_id'); // foreign dari tabel perakitan
            $table->integer('item_id'); // foreign dari tabel item
            $table->integer('jumlah');
            $table->decimal('subtotal',15,2);
            $table->text('keterangan');
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
        Schema::dropIfExists('perakitan_details');
    }
}
