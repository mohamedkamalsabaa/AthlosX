<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\FootballMatch;
use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function index()
    {
        $matches = FootballMatch::with(['team1', 'team2', 'tournament'])->get();
        return view('dashboard.user.matches.index', compact('matches'));
    }

    public function create()
    {
        $teams = Team::all(); 
        $tournaments = Tournament::all();
        return view('dashboard.user.matches.create', compact('teams', 'tournaments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id|different:team2_id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'match_datetime' => 'required|date',
            'result' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'referees' => 'nullable|string|max:255',
            'tournament_id' => 'nullable|exists:tournaments,id',
        ]);

        FootballMatch::create($request->all());

        return redirect()->route('user.matches.index')->with('success', 'تم إضافة المباراة بنجاح.');
    }

    public function show(FootballMatch $match)
    {
        $match->load(['team1', 'team2', 'tournament']);
        return view('dashboard.user.matches.show', compact('match'));
    }

    public function edit(FootballMatch $match)
    {
        $teams = Team::all(); 
        $tournaments = Tournament::all(); 
        return view('dashboard.user.matches.edit', compact('match', 'teams', 'tournaments'));
    }

    public function update(Request $request, FootballMatch $match)
    {
        $request->validate([
            'team1_id' => 'required|exists:teams,id|different:team2_id',
            'team2_id' => 'required|exists:teams,id|different:team1_id',
            'match_datetime' => 'required|date',
            'result' => 'nullable|string|max:255',
            'type' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'referees' => 'nullable|string|max:255',
            'tournament_id' => 'nullable|exists:tournaments,id',
        ]);

        $match->update($request->all());

        return redirect()->route('user.matches.index')->with('success', 'تم تحديث المباراة بنجاح.');
    }

    public function destroy(FootballMatch $match)
    {
        $match->delete();

        return redirect()->route('user.matches.index')->with('success', 'تم حذف المباراة بنجاح.');
    }
}