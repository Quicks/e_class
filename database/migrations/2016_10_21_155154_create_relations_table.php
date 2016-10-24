<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers_to_class', function (Blueprint $table) {
            $table->primary(['teachers_id', 'classes_id']);
            $table->foreign('teachers_id')->references('id')->on('teachers');
            $table->foreign('classes_id')->references('id')->on('classList');
        });
//        Schema::table('classList', function ($table) {
//            $table->foreign('schoolList_id')->references('id')->on('schoolList');
//        });
//        Schema::table('teachers', function ($table) {
//            $table->foreign('schoolList_id')->references('id')->on('schoolList');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
