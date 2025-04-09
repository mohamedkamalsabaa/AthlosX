<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStatisticsTable extends Migration
{
    public function up()
    {
        Schema::table('statistics', function (Blueprint $table) {
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->foreign('top_scorer_id')->references('id')->on('players')->onDelete('set null');
            $table->foreign('top_assist_id')->references('id')->on('players')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('statistics', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
            $table->dropForeign(['tournament_id']);
            $table->dropForeign(['top_scorer_id']);
            $table->dropForeign(['top_assist_id']);
        });
    }
}