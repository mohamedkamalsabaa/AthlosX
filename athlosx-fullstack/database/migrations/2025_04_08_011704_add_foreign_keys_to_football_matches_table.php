<?php

// database/migrations/xxxx_xx_xx_add_foreign_keys_to_football_matches_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFootballMatchesTable extends Migration
{
    public function up()
    {
        Schema::table('football_matches', function (Blueprint $table) {
            $table->foreign('team1_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('team2_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('football_matches', function (Blueprint $table) {
            $table->dropForeign(['team1_id']);
            $table->dropForeign(['team2_id']);
            $table->dropForeign(['tournament_id']);
        });
    }
}