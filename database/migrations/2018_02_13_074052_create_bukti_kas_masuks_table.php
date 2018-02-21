<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuktiKasMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_kas_masuks', function (Blueprint $table) {
            $table->increments('id_bukti_kas_masuk');
            $table->integer("kas_id")->unsigned(); //Foreign dari table account
            $table->integer("person_id")->unsigned(); //Foreign dari table person / people
            $table->string("no_ref",50);
            $table->date("tanggal");
            $table->text("keterangan");
            $table->decimal("total",15,2);
            $table->date("tanggal_jatuh_tempo");
            $table->string("no_check_giro",50);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("kas_id")->references("id_account")->on("accounts")->onDelete("cascade");
            $table->foreign("person_id")->references("id_person")->on("people")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukti_kas_masuks');
    }
}
