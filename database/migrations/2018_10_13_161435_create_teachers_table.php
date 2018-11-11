<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_telp');
            $table->integer('ktp');
            $table->integer('npwp');
            $table->string('pendidikan');
            $table->text('resume');
            $table->string('lokasi');
            $table->string('mata_pelajaran');
            $table->string('hari');
            $table->time('waktu_belajar');
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
        Schema::dropIfExists('teachers');
    }
}
