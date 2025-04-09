<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballMatchPlayerTable extends Migration
{
    public function up()
    {
        Schema::create('football_match_player', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('football_match_id'); 
            $table->unsignedBigInteger('player_id');
            $table->integer('goals')->default(0);
            $table->integer('minute')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('football_match_player');
    }
}