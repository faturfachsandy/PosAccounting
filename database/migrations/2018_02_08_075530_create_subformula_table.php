<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubformulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subformula', function (Blueprint $table) {
            $table->increments('id_subformula');
            $table->integer('formula_id'); //foreign dari tabel formula
            $table->integer('item_id'); //foreign dari tabel item
            $table->integer('jumlah');
            $table->integer('satuan_item_id'); //data dari satuan id di item
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
        Schema::dropIfExists('subformula');
    }
}
