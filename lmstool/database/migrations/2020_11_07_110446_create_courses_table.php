<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->text('course_title')->unique();
            $table->text('course_subtitle')->unique();
            $table->text('course_description');
            $table->text('course_language');
            $table->text('course_difficulty');
            $table->text('course_category');
            $table->text('course_summary');
            $table->text('course_prerequisites');
            $table->text('course_learners');
            $table->string('course_image');
            $table->string('course_video');
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
        Schema::dropIfExists('courses');
    }
}
