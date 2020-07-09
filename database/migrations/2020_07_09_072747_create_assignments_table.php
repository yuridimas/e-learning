<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id')->index();
            $table->unsignedBigInteger('grade_id')->index();
            $table->enum('type',['Quiz', 'Forum', 'Exam']);
            $table->string('title')->unique();
            $table->string('slug');
            $table->string('link')->nullable();
            $table->string('file')->nullable();
            $table->datetime('schedule_start')->nullable();
            $table->datetime('schedule_end')->nullable();
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('assignments');
    }
}
