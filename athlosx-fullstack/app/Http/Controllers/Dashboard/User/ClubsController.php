<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubsController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('dashboard.user.clubs.index', compact('clubs'));
    }

    public function create()
    {
        return view('dashboard.user.clubs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'founded_date' => 'nullable|date',
            'logo' => 'nullable|image|max:2048',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'stadium' => 'required|string|max:255',
            'current_coach' => 'required|string|max:255',
            'titles' => 'nullable|string',
            'website' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('clubs', 'public');
        }

        Club::create($data);

        return redirect()->route('user.clubs.index')->with('success', 'تم إضافة النادي بنجاح.');
    }

    public function show(Club $club)
    {
        return view('dashboard.user.clubs.show', compact('club'));
    }

    public function edit(Club $club)
    {
        return view('dashboard.user.clubs.edit', compact('club'));
    }

    public function update(Request $request, Club $club)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'founded_date' => 'nullable|date',
            'logo' => 'nullable|image|max:2048',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'stadium' => 'required|string|max:255',
            'current_coach' => 'required|string|max:255',
            'titles' => 'nullable|string',
            'website' => 'nullable|url',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($club->logo) {
                \Storage::disk('public')->delete($club->logo);
            }
            $data['logo'] = $request->file('logo')->store('clubs', 'public');
        }

        $club->update($data);

        return redirect()->route('user.clubs.index')->with('success', 'تم تحديث النادي بنجاح.');
    }

    public function destroy(Club $club)
    {
        if ($club->logo) {
            \Storage::disk('public')->delete($club->logo);
        }
        $club->delete();

        return redirect()->route('user.clubs.index')->with('success', 'تم حذف النادي بنجاح.');
    }
}