<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementQuestionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurement_question_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('measurement_question_id')->constrained();
            $table->longText('item_description');
            $table->integer('unit');
            $table->integer('qty');
            $table->integer('rate');
            $table->integer('length');
            $table->integer('breadth');
            $table->integer('depth');
            $table->integer('num');
            $table->longText('measurement_comment');
            $table->string('status')->default('active');

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
        Schema::dropIfExists('measurement_question_forms');
    }
}
