<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUangMukasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uang_mukas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("faktur_pembelian_id")->unsigned(); //Foreign dari table faktur pembelian
            $table->text("keterangan");
            $table->timestamps();
            
            //-------- Relasi ----------
            $table->foreign("faktur_pembelian_id")->references("id")->on("faktur_pembelians")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uang_mukas');
    }
}
