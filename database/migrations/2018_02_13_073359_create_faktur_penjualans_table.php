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
            $table->increments('id');
            $table->string("no_ref",50);
            $table->string("tipe_invoice");
            $table->integer("customer_id")->unsigned(); //Foreign dari table person / people
            $table->integer("sales_order_id")->unsigned(); //Foreign dari table sales order
            $table->integer("surat_jalan_id")->unsigned(); //Foreign dari table surat jalan
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("customer_id")->references("id")->on("people")->onDelete("cascade");
            $table->foreign("sales_order_id")->references("id")->on("sales_orders")->onDelete("cascade");
            $table->foreign("surat_jalan_id")->references("id")->on("surat_jalans")->onDelete("cascade");
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
