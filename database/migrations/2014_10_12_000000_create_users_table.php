<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nip")->unique();
            $table->string('name');
            $table->string('email');
            $table->string('password')->index();
            $table->string("jabatan");//untuk hak akses
            $table->string("nama_jabatan");
            $table->string("alamat");
            $table->string("no_hp");
            $table->string('id_skpd');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
