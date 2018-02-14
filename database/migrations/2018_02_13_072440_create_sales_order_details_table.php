<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_order_details', function (Blueprint $table) {
            $table->increments('id_sales_order_detail');
            // $table->integer("sales_order_id"); perlu ditanya ini wkk
            $table->integer("item_id"); //Foreign dari table item
            $table->decimal("harga",15,2);
            $table->integer("jumlah");
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
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
        Schema::dropIfExists('sales_order_details');
    }
}
