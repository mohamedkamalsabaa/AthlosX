<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'age_group', 'club_id', 'coach', 'starting_lineup', 'tactic', 'player_count'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function matches()
    {
        return $this->belongsToMany(FootballMatch::class, 'football_match_team');
    }

    public function statistics()
    {
        return $this->hasMany(Statistics::class);
    }
}