<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdjustmentNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustment_nilais', function (Blueprint $table) {
            $table->increments('id_adjustment_nilai');
            $table->date('tanggal');
            $table->string('no_ref', 50);
            $table->integer('account_id'); //Foreign dari tabel account
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
        Schema::dropIfExists('adjustment_nilais');
    }
}
