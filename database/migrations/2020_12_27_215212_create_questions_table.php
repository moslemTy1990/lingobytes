<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            //TODO ENUM
            $table->string('exercise_type')->nullable();
            $table->integer('parent_id')->nullable();
            $table->foreignId('course_id');
            $table->longText('title');
            //TODO ENUM
            $table->text('question_type')->nullable();
            $table->text('value')->nullable();
            //TODO ENUM
            $table->text('answer_type'  )->nullable();
            $table->text('correct_answer')->nullable();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
