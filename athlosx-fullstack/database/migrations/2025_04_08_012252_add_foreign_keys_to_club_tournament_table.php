<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClubTournamentTable extends Migration
{
    public function up()
    {
        Schema::table('club_tournament', function (Blueprint $table) {
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('club_tournament', function (Blueprint $table) {
            $table->dropForeign(['club_id']);
            $table->dropForeign(['tournament_id']);
        });
    }
}