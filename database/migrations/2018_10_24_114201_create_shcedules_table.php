<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShcedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shcedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('teacher_subject_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->foreign('teacher_subject_id')->references('id')->on('teacher_subjects');
            $table->enum('day',['Senin', 'Selasa', 'Rabu','Kamis','Jumat','Sabtu'])->default('Senin');
            $table->time('time_les')->nullable();
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
        Schema::dropIfExists('shcedules');
    }
}
