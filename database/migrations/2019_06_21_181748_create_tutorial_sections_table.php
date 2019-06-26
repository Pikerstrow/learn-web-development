<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tutorial_id')->unsigned()->index()->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tutorial_id')->references('id')->on('tutorials_page')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorial_sections');
    }
}
