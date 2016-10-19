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
        Schema::create('teachers_to_class', function (Blueprint $table) {
            $table->primary(['id_teachers', 'id_classes']);
            $table->foreign('id_teachers')->references('id')->on('classList');
            $table->foreign('id_classes')->references('id')->on('schoolList');
        });
        Schema::table('schoolList', function ($table) {
            $table->foreign('id')->references('id')->on('classList');
        });
        Schema::table('schoolList', function ($table) {
            $table->foreign('id')->references('id')->on('classList');
        });
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
