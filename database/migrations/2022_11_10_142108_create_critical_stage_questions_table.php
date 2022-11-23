<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriticalStageQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critical_stage_questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->string('type');
            $table->integer('order');
            $table->integer('critical_stage');

            $table->string('status');
 
            $table->foreignId('facility_id')->constrained();
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
        Schema::dropIfExists('critical_stage_questions');
    }
}
