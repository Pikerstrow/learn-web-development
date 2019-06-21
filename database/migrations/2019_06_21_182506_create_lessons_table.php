<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tutorial_section_id')->unsigned()->index()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->mediumText('body');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tutorial_section_id')->references('id')->on('tutorial_sections')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
