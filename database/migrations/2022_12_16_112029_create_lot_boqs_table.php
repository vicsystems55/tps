<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotBoqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_boqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lot_id')->constrained();
            $table->foreignId('facility_id')->constrained();
            $table->string('category');
            $table->string('category_description');
            $table->string('description');
            $table->string('unit');
            $table->integer('qty');
            $table->integer('rate');
            $table->integer('amount');
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
        Schema::dropIfExists('lot_boqs');
    }
}
