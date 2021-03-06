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
            $table->increments('id');
            $table->integer("sales_order_id")->unsigned(); // foreign dari table sales order
            $table->integer("item_id")->unsigned(); //Foreign dari table item
            $table->decimal("harga",15,2);
            $table->integer("jumlah");
            $table->boolean("tipe_diskon")->default(false);
            $table->integer("diskon");
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade");
            $table->foreign("sales_order_id")->references("id")->on("sales_orders")->onDelete("cascade");
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
