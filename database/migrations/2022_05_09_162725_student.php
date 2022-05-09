<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('students', function(Blueprint $table){
           $table->id();
           $table->id('semester_id')->unsigned();
           $table->string('name',150);
           $table->string('lastName', 150);
           $table->integer('age');
           $table->string('gender',150);
           $table->string('levelOfStudies', 150);
           $table->integer('yearOfStudies');
           $table->string('scholarship',150);
           $table->boolean('part_timeStudent')->default(0);
           $table->timestamps();
           $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
