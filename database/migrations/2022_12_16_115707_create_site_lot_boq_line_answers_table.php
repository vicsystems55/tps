<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteLotBoqLineAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_lot_boq_line_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('critical_stage_question_id')->constrained();
            $table->foreignId('field_officer_id');
            $table->string('length');
            $table->string('breadth');
            $table->string('depth');
            $table->string('comments');

            $table->string('status');
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
        Schema::dropIfExists('site_lot_boq_line_answers');
    }
}
