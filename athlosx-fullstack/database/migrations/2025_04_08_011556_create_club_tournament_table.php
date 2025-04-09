<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubTournamentTable extends Migration
{
    public function up()
    {
        Schema::create('club_tournament', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('tournament_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('club_tournament');
    }
}