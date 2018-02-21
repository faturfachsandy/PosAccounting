<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->increments('id_sales_order');
            $table->date("tanggal");
            $table->integer("karyawan_id")->unsigned(); //Foreign dari table Karyawan
            $table->integer("person_id")->unsigned(); //Foreign dari table person / people
            $table->integer("detail_person_id")->unsigned(); //Foreign dari table detail person / people
            $table->integer("jangka_waktu_kredit_id")->unsigned(); //Foreign dari table jangka waktu kredit
            $table->date("tanggal_dibutuhkan");
            $table->string("no_ref",50);
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
            $table->decimal("ppn",15,2);
            $table->text("keterangan");
            $table->decimal("grand_total",15,2);
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("karyawan_id")->references("id_karyawan")->on("karyawans")->onDelete("cascade");
            $table->foreign("person_id")->references("id_person")->on("people")->onDelete("cascade");
            $table->foreign("detail_person_id")->references("id_detail_person")->on("detail_people")->onDelete("cascade");
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
        Schema::dropIfExists('sales_orders');
    }
}
