<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbJawaban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jawaban', function (Blueprint $table) {
            $table->integer('id_jawaban', true);
            $table->integer('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id_pertanyaan')->on('tb_pertanyaan');
            $table->text('isi');
            $table->bigInteger('id_profil');
            $table->dateTime('tanggal_dibuat', 0);
            $table->dateTime('tanggal_diperbaharui', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_jawaban');
    }
}
