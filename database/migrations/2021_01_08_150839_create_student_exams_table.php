<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exams', function (Blueprint $table) {
            $table->id();
            $table->string('admno');
            $table->string('class');
            $table->string('stream');
            $table->string('examtype');
            $table->integer('mathematics');
            $table->integer('english');
            $table->integer('kiswahili');
            $table->integer('science'); 
            $table->integer('socialstudies');
            $table->integer('totalmarks');
            $table->integer('average');
            $table->string('meangrade');
            $table->string('comment'); 
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
        Schema::dropIfExists('student_exams');
    }
}
