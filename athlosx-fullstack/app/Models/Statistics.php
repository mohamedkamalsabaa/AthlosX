<?php

// app/Models/Statistics.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected $fillable = [
        'team_id', 'tournament_id', 'ranking', 'points', 'wins', 'draws', 'losses',
        'goals_scored', 'goals_conceded', 'top_scorer_id', 'top_assist_id'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function topScorer()
    {
        return $this->belongsTo(Player::class, 'top_scorer_id');
    }

    public function topAssist()
    {
        return $this->belongsTo(Player::class, 'top_assist_id');
    }
}