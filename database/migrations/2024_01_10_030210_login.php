<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id('id_login')->autoIncrement()->change();
            $table->string('nama_pengguna');
            $table->string('username');
            $table->string('password');
            $table->string('level');
            $table->timestamps();
            $table->primary('id_login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('login', function (Blueprint $table){
            $table->id('id_login')->change();
        });
    }
};
