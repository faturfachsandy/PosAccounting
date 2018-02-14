<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakturPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faktur_penjualans', function (Blueprint $table) {
            $table->increments('id_faktur_penjualan');
            $table->string("no_ref",50);
            $table->string("tipe_invoice");
            $table->integer("customer_id"); //Foreign dari table person / people
            $table->integer("sales_order_id"); //Foreign dari table sales order
            $table->integer("surat_jalan_id"); //Foreign dari table surat jalan
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
        Schema::dropIfExists('faktur_penjualans');
    }
}
