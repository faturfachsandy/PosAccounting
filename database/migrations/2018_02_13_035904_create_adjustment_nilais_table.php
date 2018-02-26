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
            $table->increments('id');
            $table->date('tanggal');
            $table->string('no_ref', 50);
            $table->integer('account_id')->unsigned(); //Foreign dari tabel account
            $table->text('keterangan');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("account_id")->references("id")->on("accounts")->onDelete("cascade");
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
