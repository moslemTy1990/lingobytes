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
            $table->longText('title');
            $table->integer('parent_id')->nullable();
            $table->foreignId('exam_type_id');
            //TODO ENUM
            $table->enum('question_type',['text','multiple_choice','voice','homework'])->default('text');
            $table->text('value')->nullable();
            //TODO ENUM
            $table->enum('answer_type',['text','multiple_choice','voice','homework'])->default('text');
            $table->text('correct_answer')->nullable();
            $table->timestamps();

            $table->foreign('exam_type_id')->references('id')->on('exam_types')->onDelete('cascade');
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
