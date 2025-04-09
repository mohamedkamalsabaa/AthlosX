<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->get();
        return view('dashboard.user.players.index', compact('players'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('dashboard.user.players.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'nationality' => 'required|string|max:255',
            'number' => 'nullable|integer|min:1',
            'position' => 'required|string|max:255',
            'height' => 'nullable|numeric|min:0',
            'weight' => 'nullable|numeric|min:0',
            'preferred_foot' => 'nullable|string|max:255',
            'matches_played' => 'nullable|integer|min:0',
            'goals' => 'nullable|integer|min:0',
            'assists' => 'nullable|integer|min:0',
            'photo' => 'nullable|image|max:2048',
            'join_date' => 'required|date',
            'status' => 'required|in:active,substitute,injured,loaned',
            'contract_start' => 'nullable|date',
            'contract_end' => 'nullable|date|after:contract_start',
            'team_id' => 'required|exists:teams,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('players', 'public');
        }

        Player::create($data);

        return redirect()->route('user.players.index')->with('success', 'تم إضافة اللاعب بنجاح.');
    }

    public function show(Player $player)
    {
        $player->load('team');
        return view('dashboard.user.players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        $teams = Team::all();
        return view('dashboard.user.players.edit', compact('player', 'teams'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'nationality' => 'required|string|max:255',
            'number' => 'nullable|integer|min:1',
            'position' => 'required|string|max:255',
            'height' => 'nullable|numeric|min:0',
            'weight' => 'nullable|numeric|min:0',
            'preferred_foot' => 'nullable|string|max:255',
            'matches_played' => 'nullable|integer|min:0',
            'goals' => 'nullable|integer|min:0',
            'assists' => 'nullable|integer|min:0',
            'photo' => 'nullable|image|max:2048',
            'join_date' => 'required|date',
            'status' => 'required|in:active,substitute,injured,loaned',
            'contract_start' => 'nullable|date',
            'contract_end' => 'nullable|date|after:contract_start',
            'team_id' => 'required|exists:teams,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($player->photo) {
                \Storage::disk('public')->delete($player->photo);
            }
            $data['photo'] = $request->file('photo')->store('players', 'public');
        }

        $player->update($data);

        return redirect()->route('user.players.index')->with('success', 'تم تحديث اللاعب بنجاح.');
    }

    public function destroy(Player $player)
    {
        if ($player->photo) {
            \Storage::disk('public')->delete($player->photo);
        }
        $player->delete();

        return redirect()->route('user.players.index')->with('success', 'تم حذف اللاعب بنجاح.');
    }
}