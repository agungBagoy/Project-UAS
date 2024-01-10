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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran')->autoIncrement()->change();
            $table->unsignedBigInteger('id_booking');
            $table->foreign('id_booking')->references('id_booking')->on('booking');
            $table->string('no_rekening', 255);
            $table->string('nama_rekening', 255);
            $table->integer('nominal');
            $table->date('tanggal');
            $table->timestamps();
            $table->primary('id_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran', function (Blueprint $table){
            $table->id('id_pembayaran')->change();
        });
    }
};
