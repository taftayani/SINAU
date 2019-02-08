<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('mata_pelajarans');
            $table->unsignedInteger('shcedule_id');
            $table->foreign('shcedule_id')->references('id')->on('shcedules');
            $table->unsignedInteger('confirm_id');
            $table->foreign('confirm_id')->references('id')->on('confirms');
            $table->date('date_les');
            $table->string('mention');
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
        Schema::dropIfExists('stats');
    }
}
