<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubformulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subformulas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('formula_id')->unsigned(); //foreign dari tabel formula
            $table->integer('item_id')->unsigned(); //foreign dari tabel item
            $table->integer('jumlah');
            $table->integer('satuan_item_id'); //data dari satuan id di item
            $table->text('keterangan');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("formula_id")->references("id")->on("formulas")->onDelete("cascade");
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
        Schema::dropIfExists('subformulas');
    }
}
