<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id');
            $table->foreignId('state_id');
            $table->string('code');
            $table->string('lot_no');
            $table->string('surfix');
            $table->string('prefix');


            $table->integer('total_cost')->nullable();
            $table->integer('unicef_cost')->nullable();
            $table->foreignId('contract_id');





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
        Schema::dropIfExists('lots');
    }
}
