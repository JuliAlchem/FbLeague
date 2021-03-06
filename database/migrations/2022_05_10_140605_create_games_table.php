<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            
            $table->unsignedBigInteger("team1_id");
            $table->integer("team1_result");
            $table->unsignedBigInteger("team2_id");
            $table->integer("team2_result");
            $table->date('date');
            
            
            $table->foreign("team1_id")->references('id')->on('teams');
            $table->foreign("team2_id")->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
