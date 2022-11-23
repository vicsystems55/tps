<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('facility_id')->constrained();
            $table->foreignId('contract_id')->constrained();
            $table->foreignId('supervision_team_id')->constrained()->nullable();

            $table->foreignId('lga_id')->constrained();
            $table->foreignId('lot_id')->constrained();

            $table->integer('percentage_completion')->default(0);

            $table->string('location');
            $table->string('ward');

            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            
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
        Schema::dropIfExists('sites');
    }
}
