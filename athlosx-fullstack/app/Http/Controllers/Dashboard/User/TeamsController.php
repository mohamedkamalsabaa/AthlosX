<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Club;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::with('club')->get();
        return view('dashboard.user.teams.index', compact('teams'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('dashboard.user.teams.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age_group' => 'nullable|string|max:255',
            'club_id' => 'required|exists:clubs,id',
            'coach' => 'required|string|max:255',
            'starting_lineup' => 'nullable|string',
            'tactic' => 'nullable|string|max:255',
            'player_count' => 'nullable|integer|min:0',
        ]);

        Team::create($request->all());

        return redirect()->route('user.teams.index')->with('success', 'تم إضافة الفريق بنجاح.');
    }

    public function show(Team $team)
    {
        $team->load('club');
        return view('dashboard.user.teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        $clubs = Club::all();
        return view('dashboard.user.teams.edit', compact('team', 'clubs'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age_group' => 'nullable|string|max:255',
            'club_id' => 'required|exists:clubs,id',
            'coach' => 'required|string|max:255',
            'starting_lineup' => 'nullable|string',
            'tactic' => 'nullable|string|max:255',
            'player_count' => 'nullable|integer|min:0',
        ]);

        $team->update($request->all());

        return redirect()->route('user.teams.index')->with('success', 'تم تحديث الفريق بنجاح.');
    }

    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('user.teams.index')->with('success', 'تم حذف الفريق بنجاح.');
    }
}