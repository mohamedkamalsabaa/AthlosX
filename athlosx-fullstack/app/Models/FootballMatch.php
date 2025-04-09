<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class FootballMatch extends Model
{
    protected $fillable = [
        'team1_id', 'team2_id', 'match_datetime', 'result', 'type', 'venue', 'referees', 'tournament_id'
    ];

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class, 'football_match_player')->withPivot('goals', 'minute');
    }

    public function performances()
    {
        return $this->hasMany(Performance::class, 'football_match_id');
    }
}