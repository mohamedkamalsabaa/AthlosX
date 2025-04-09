<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        $statistics = Statistics::with(['team', 'tournament'])->get();
        return view('dashboard.user.statistics.index', compact('statistics'));
    }
}