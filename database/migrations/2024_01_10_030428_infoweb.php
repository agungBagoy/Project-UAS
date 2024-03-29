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
        Schema::create('infoweb', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rental')->nullable();
            $table->string('telp', 15)->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->text('no_rek')->nullable();
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
        Schema::dropIfExists('infoweb');
    }
};
