<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJangkaWaktuKreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jangka_waktu_kredits', function (Blueprint $table) {
            $table->increments('id_jangka_waktu_kredit');
            $table->integer('account_id')->unsigned()->unsigned(); //foreign dari table account
            $table->integer('jangka_waktu_kredit')->unsigned();
            $table->boolean('default')->default(false);
            $table->boolean('aktif')->default(true);
            $table->text('keterangan');
            $table->timestamps();

             //-------- Relasi ----------
            $table->foreign("account_id")->references("id_account")->on("accounts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jangka_waktu_kredits');
    }
}
