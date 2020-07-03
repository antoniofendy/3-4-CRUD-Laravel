<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pertanyaan', function (Blueprint $table) {
            $table->integer('id_pertanyaan',true);
            $table->string('judul', 255);
            $table->string('id_profil');
            $table->text('isi');
            $table->integer('jml_jawaban');
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
        Schema::dropIfExists('tb_pertanyaan');
    }
}
