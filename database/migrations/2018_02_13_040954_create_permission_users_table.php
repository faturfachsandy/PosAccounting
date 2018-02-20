<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_users', function (Blueprint $table) {
            $table->increments('id_permission_user');
            $table->integer('modul_app_id')->unsigned(); //foreign dari tabel modul app
            $table->integer('user_id')->unsigned(); //foreign dari table users
            $table->integer('grup_id')->unsigned(); //foreign dari table grup user
            $table->timestamps();

            //-------- Relasi ----------
            $table->foreign("modul_app_id")->references("id_modul_app")->on("modul_apps")->onDelete("cascade");
            $table->foreign("user_id")->references("id_user")->on("users")->onDelete("cascade");
            $table->foreign("grup_id")->references("id_grup_user")->on("grup_users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_users');
    }
}
