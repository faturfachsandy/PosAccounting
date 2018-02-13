<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJangkaWaktuKreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jangka_waktu_kredit', function (Blueprint $table) {
            $table->increments('id_jangka_waktu_kredit');
            $table->integer('account_id'); //foreign dari table account
            $table->integer('jangka_waktu_kredit'); //kode parent account
            $table->boolean('default')->default(false);
            $table->boolean('aktif')->default(true);
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
        Schema::dropIfExists('jangka_waktu_kredit');
    }
}
