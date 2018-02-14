<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdjustmentNilaiDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustment_nilai_details', function (Blueprint $table) {
            $table->increments('id_adjustment_nilai_detail');
            $table->integer('adjustment_nilai_id'); //foreign dari tabel adjustment nilai
            $table->integer('item_id'); // foreign dari tabel item
            $table->decimal('nilai',15,2);
            $table->text('keterangan');
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
        Schema::dropIfExists('adjustment_nilai_details');
    }
}
