<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratJalanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_jalan_details', function (Blueprint $table) {
            $table->increments('id_surat_jalan_detail');
            $table->integer("surat_jalan_id"); //Foreign dari table surat jalan
            $table->integer("item_id"); //Foreign dari table item
            $table->integer("jumlah");
            $table->decimal("harga",15,2);
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
        Schema::dropIfExists('surat_jalan_details');
    }
}
