<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class-registers', function ($table) {
            $table->increments('id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('tasks_id')->references('id')->on('tasks');
            $table->foreign('marks_id')->references('id')->on('marks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('class-registers');
    }
}
