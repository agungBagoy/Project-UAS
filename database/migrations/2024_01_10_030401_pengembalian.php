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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id('id_pengembalian')->autoIncrement()->change();
            $table->string('kode_booking', 255);
            $table->date('tanggal');
            $table->double('denda');
            $table->timestamps(); 
            $table->primary('id_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengembalian', function (Blueprint $table){
            $table->id('id_pengembalian')->change();
        });
    }
};
