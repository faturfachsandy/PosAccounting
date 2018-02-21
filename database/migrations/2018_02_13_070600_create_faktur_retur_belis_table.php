<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturReturBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_retur_belis', function (Blueprint $table) {
            $table->increments('id_faktur_retur_beli');
            $table->date("tanggal");
            $table->integer("person_id")->unsigned(); //Foreign dari table person / people
            $table->integer("faktur_pembelian_id")->unsigned(); //Foreign dari table faktur pembelian
            $table->integer("gudang_id")->unsigned(); //Foreign dari table gudang
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
            $table->decimal("ppn",15,2);
            $table->text("keterangan");
            $table->integer("jangka_waktu_kredit_id")->unsigned(); //Foreign dari table jangka waktu kredit
            $table->date("jatuh_tempo");
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("person_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("faktur_pembelian_id")->references("id_faktur_pembelian")->on("faktur_pembelians")->onDelete("cascade");
            $table->foreign("gudang_id")->references("id_gudang")->on("gudangs")->onDelete("cascade");
            $table->foreign("jangka_waktu_kredit_id")->references("id_jangka_waktu_kredit")->on("jangka_waktu_kredits")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faktur_retur_belis');
    }
}
