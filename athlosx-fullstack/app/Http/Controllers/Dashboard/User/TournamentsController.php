<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Tournament;
use App\Models\Club;
use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::with('clubs')->get();
        return view('dashboard.user.tournaments.index', compact('tournaments'));
    }

    public function create()
    {
        $clubs = Club::all();
        return view('dashboard.user.tournaments.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'clubs' => 'nullable|array',
            'clubs.*' => 'exists:clubs,id',
        ]);

        $tournament = Tournament::create($request->except('clubs'));

        if ($request->has('clubs')) {
            $tournament->clubs()->sync($request->input('clubs'));
        }

        return redirect()->route('user.tournaments.index')->with('success', 'تم إضافة البطولة بنجاح.');
    }

    public function show(Tournament $tournament)
    {
        $tournament->load('clubs');
        return view('dashboard.user.tournaments.show', compact('tournament'));
    }

    public function edit(Tournament $tournament)
    {
        $clubs = Club::all();
        return view('dashboard.user.tournaments.edit', compact('tournament', 'clubs'));
    }

    public function update(Request $request, Tournament $tournament)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'clubs' => 'nullable|array',
            'clubs.*' => 'exists:clubs,id',
        ]);

        $tournament->update($request->except('clubs'));

        if ($request->has('clubs')) {
            $tournament->clubs()->sync($request->input('clubs'));
        } else {
            $tournament->clubs()->detach();
        }

        return redirect()->route('user.tournaments.index')->with('success', 'تم تحديث البطولة بنجاح.');
    }

    public function destroy(Tournament $tournament)
    {
        $tournament->clubs()->detach();
        $tournament->delete();

        return redirect()->route('user.tournaments.index')->with('success', 'تم حذف البطولة بنجاح.');
    }
}