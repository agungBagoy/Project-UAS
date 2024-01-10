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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id('id_mobil')->autoIncrement()->change();
            $table->string('no_plat');
            $table->string('merk');
            $table->double('harga');
            $table->integer('Luggage');
            $table->integer('Doors');
            $table->integer('Passenger');
            $table->string('deskripsi');
            $table->string('status');
            $table->text('gambar');
            $table->timestamps();
            $table->primary('id_mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobil', function (Blueprint $table){
            $table->id('id_mobil')->change();
        });
    }
};
