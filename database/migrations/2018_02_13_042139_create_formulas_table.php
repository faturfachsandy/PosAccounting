<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned(); //foreign dari tabel item
            $table->integer('satuan_item_id'); //data dari satuan id di item
            $table->date('tgl_mulai_berlaku');
            $table->date('tgl_sampai_berlaku');
            $table->string('no_ref',50);
            $table->text('keterangan');
            $table->boolean('aktif')->default(true);
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
        Schema::dropIfExists('formulas');
    }
}
