<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediabanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediabanks', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('media_type');
            $table->string('description');
            $table->string('status')->default('active');
            $table->morphs('mediabankable');
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
        Schema::dropIfExists('mediabanks');
    }
}
