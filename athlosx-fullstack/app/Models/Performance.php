<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = ['player_id', 'football_match_id', 'rating', 'comments'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function footballMatch()
    {
        return $this->belongsTo(FootballMatch::class, 'football_match_id');
    }
}