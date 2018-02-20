<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_people', function (Blueprint $table) {
            $table->increments('id_detail_person');
            $table->integer('person_id')->unsigned(); // foreign dari table person
            $table->integer('alamat_id')->unsigned(); // foreign dari tabel alamat
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("person_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("alamat_id")->references("id_alamat")->on("alamats")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_people');
    }
}
