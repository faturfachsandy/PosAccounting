
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
            $table->increments('id');
            $table->integer('tipe_person');
            $table->integer('karyawan_id')->unsigned(); //foreign dari tabel karyawan
            $table->string('kode_person',50)->index();
            $table->string('nama',25);
            $table->integer('termin_pembayaran')->unsigned(); //foreign dari tabel jangka waktu kredit
            $table->integer('batas_tempo');
            $table->integer('batas_piutang');
            $table->integer('batas_hutang');
            $table->string('rayon', 50);
            $table->string('npwp',25);
            $table->boolean('tipe_diskon')->default(false);
            $table->integer('diskon');
            $table->text('keterangan');
            $table->integer('coa_piutang_account_id')->unsigned(); //foreign dari tabel account
            $table->integer('tipe_harga_jual_id')->unsigned(); //foreign dari tabel daftar harga
            $table->boolean('bisa_supplier')->default(false);
            $table->boolean('bisa_customer')->default(false);
            $table->boolean('aktif')->default(true);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("karyawan_id")->references("id")->on("karyawans")->onDelete("cascade");
            $table->foreign("termin_pembayaran")->references("id")->on("jangka_waktu_kredits")->onDelete("cascade");
            $table->foreign("coa_piutang_account_id")->references("id")->on("accounts")->onDelete("cascade");
            $table->foreign("tipe_harga_jual_id")->references("id")->on("daftar_hargas")->onDelete("cascade");
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
