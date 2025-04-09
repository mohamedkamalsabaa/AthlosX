<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFootballMatchPlayerTable extends Migration
{
    public function up()
    {
        Schema::table('football_match_player', function (Blueprint $table) {
            $table->foreign('football_match_id')->references('id')->on('football_matches')->onDelete('cascade');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('football_match_player', function (Blueprint $table) {
            $table->dropForeign(['football_match_id']);
            $table->dropForeign(['player_id']);
        });
    }
}