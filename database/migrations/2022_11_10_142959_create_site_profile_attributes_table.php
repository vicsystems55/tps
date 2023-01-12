<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteProfileAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_profile_attributes', function (Blueprint $table) {
            $table->id();
            $table->longText('question');
            $table->string('type');
            $table->integer('order');
            $table->string('status');
            $table->string('category');
            $table->integer('weight')->default(5);


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
        Schema::dropIfExists('site_profile_attributes');
    }
}
