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
            $table->integer("person_id")->unsigned(); //Foreign dari table person / people
            $table->integer("faktur_penjualan_id")->unsigned(); //Foreign dari table faktur penjualan
            $table->integer("karyawan_id")->unsigned(); //Foreign dari table karyawan
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
            $table->decimal("ppn",15,2);
            $table->text("keterangan");
            $table->integer("jangka_waktu_kredit_id")->unsigned(); //Foreign dari table jangka waktu kredit
            $table->date("jatuh_tempo");
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("person_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("faktur_penjualan_id")->references("id_faktur_penjualan")->on("faktur_penjualans")->onDelete("cascade");
            $table->foreign("karyawan_id")->references("id_karyawan")->on("karyawans")->onDelete("cascade");
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
        Schema::dropIfExists('faktur_retur_juals');
    }
}
