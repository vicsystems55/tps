<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->longText('desc');
            $table->foreignId('state_id')->constrained();
            $table->string('phase');
            $table->string('tranch');
            $table->date('award_date');
            $table->integer('duration_in_months')->default(3);
            $table->date('delivery_date');
            $table->foreignId('programme_id')->constrained();
            $table->string('name');


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
        Schema::dropIfExists('contracts');
    }
}
