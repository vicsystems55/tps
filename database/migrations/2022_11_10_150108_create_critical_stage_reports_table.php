<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriticalStageReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critical_stage_reports', function (Blueprint $table) {
            $table->id();

            $table->foreignId('site_id')->constrained();

            $table->integer('order');

            $table->foreignId('critical_stage_question_id')->constrained();

            $table->longText('answer');

            $table->string('status');

            $table->integer('stage');

            $table->date('inspection_date');

            $table->date('mobilized_date');

        
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
        Schema::dropIfExists('critical_stage_reports');
    }
}
