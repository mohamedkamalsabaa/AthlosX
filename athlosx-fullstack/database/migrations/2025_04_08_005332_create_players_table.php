<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('birth_date');
            $table->string('nationality');
            $table->integer('number')->nullable();
            $table->string('position');
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('preferred_foot')->nullable();
            $table->integer('matches_played')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('assists')->default(0);
            $table->string('photo')->nullable();
            $table->date('join_date');
            $table->string('status')->default('active');
            $table->date('contract_start')->nullable();
            $table->date('contract_end')->nullable();
            $table->unsignedBigInteger('team_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}