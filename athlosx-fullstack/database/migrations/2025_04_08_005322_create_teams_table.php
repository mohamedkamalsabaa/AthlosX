<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age_group')->nullable();
            $table->unsignedBigInteger('club_id');
            $table->string('coach');
            $table->text('starting_lineup')->nullable();
            $table->string('tactic')->nullable();
            $table->integer('player_count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}