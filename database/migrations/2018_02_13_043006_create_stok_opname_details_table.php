<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokOpnameDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_opname_details', function (Blueprint $table) {
            $table->increments('id_stok_opname_detail');
<<<<<<< HEAD
            $table->integer('item_id'); // foreign dari tabel item
=======
            $table->integer('item_id')->unsigned(); // foreign dari tabel item
>>>>>>> c44296d936d671758448a490fb2fa11980a30dab
            $table->integer('jumlah');
            $table->text('keterangan');
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("item_id")->references("id_item")->on("items")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_opname_details');
    }
}
