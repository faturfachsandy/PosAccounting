<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id_person');
            $table->integer('tipe_person');
            $table->integer('karyawan_id'); //foreign dari tabel karyawan
            $table->string('kode_person',50)->index();
            $table->string('nama',25);
            $table->integer('termin_pembayaran'); //foreign dari tabel jangka waktu kredit
            $table->integer('batas_tempo');
            $table->integer('batas_piutang');
            $table->integer('batas_hutang');
            $table->string('rayon', 50);
            $table->string('npwp',25);
            $table->boolean('tipe_diskon')->default(false);
            $table->integer('diskon');
            $table->text('keterangan');
            $table->integer('coa_piutang_account_id'); //foreign dari tabel account
            $table->integer('tipe_harga_jual_id'); //foreign dari tabel
            $table->boolean('bisa_supplier')->default(false);
            $table->boolean('bisa_customer')->default(false);
            $table->boolean('aktif')->default(true);
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
        Schema::dropIfExists('people');
    }
}
