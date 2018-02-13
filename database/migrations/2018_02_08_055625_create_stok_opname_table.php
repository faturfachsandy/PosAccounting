<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokOpnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_opname', function (Blueprint $table) {
            $table->increments('id_stok_opname');
            $table->date('tanggal');
            $table->integer('gudang_id'); //foreign dari tabel gudang
            $table->string('no_ref', 50);
            $table->text('keterangan');
            $table->string('aktivitas', 50);
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
        Schema::dropIfExists('stok_opname');
    }
}
