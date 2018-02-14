<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturReturJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_retur_juals', function (Blueprint $table) {
            $table->increments('id_faktur_retur_jual');
            $table->date("tanggal");
            $table->integer("person_id"); //Foreign dari table person / people
            $table->integer("faktur_penjualan_id"); //Foreign dari table faktur penjualan
            $table->integer("karyawan_id"); //Foreign dari table karyawan
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
            $table->decimal("ppn",15,2);
            $table->text("keterangan");
            $table->integer("jangka_waktu_kredit_id"); //Foreign dari table jangka waktu kredit
            $table->date("jatuh_tempo");
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
        Schema::dropIfExists('faktur_retur_juals');
    }
}
