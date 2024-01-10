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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('id_booking')->autoIncrement()->change();
            $table->string('kode_booking');
            $table->unsignedBigInteger('id_login');
            $table->unsignedBigInteger('id_mobil');
            $table->string('ktp');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_tlp', 15);
            $table->string('tanggal');
            $table->integer('lama_sewa');
            $table->integer('total_harga');
            $table->string('konfirmasi_pembayaran');
            $table->string('tgl_input');
            
            // Set foreign keys
            $table->foreign('id_login')->references('id')->on('login')->onDelete('cascade');
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')->onDelete('cascade');

            $table->timestamps();
            $table->primary('id_booking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking', function (Blueprint $table){
            $table->id('id_booking')->change();
        });
    }
};
