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
            $table->foreignId('critical_stage_question_id')->nullable();

            $table->foreignId('lot_boq_id')->constrained();

            $table->foreignId('site_id')->constrained();


            $table->foreignId('field_officer_id')->nullable();

            $table->string('length')->nullable();
            $table->string('breadth')->nullable();
            $table->string('depth')->nullable();
            $table->string('number')->nullable();
            $table->string('comments')->nullable();
            $table->string('status')->nullable();

            $table->integer('cert_qty')->default(0);
            $table->integer('cert_completion')->default(0);

            $table->integer('cert_amount')->default(0);


            
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
