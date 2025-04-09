<?php

namespace App\Http\Controllers\Dashboard\User\AiTools;

use App\Http\Controllers\Controller;
use App\Services\PredictionService;
use App\Models\Team;
use Illuminate\Http\Request;

class PredictionEngineController extends Controller
{
    protected $predictionService;

    public function __construct(PredictionService $predictionService)
    {
        $this->predictionService = $predictionService;
    }

    public function index()
    {
        $teams = Team::all();
        return view('dashboard.user.ai-tools.prediction-engine.index', compact('teams'));
    }

    public function predict(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'opponent_id' => 'required|exists:teams,id|different:team_id',
            'date' => 'required|date|after_or_equal:today',
        ]);

        $team = Team::find($request->team_id);
        $opponent = Team::find($request->opponent_id);
        $date = $request->date;

        // dd($opponent->name);

        $prediction = $this->predictionService->getPrediction($team->name, $opponent->name, $date);

        $teams = Team::all();

        if (isset($prediction['error']) && $prediction['error']) {
            return view('dashboard.user.ai-tools.prediction-engine.index', compact('teams'))
                ->with('error', 'فشل في الحصول على التنبؤ: ' . $prediction['message'])
                ->withInput();
        }

        return view('dashboard.user.ai-tools.prediction-engine.index', compact('teams', 'prediction', 'team', 'opponent'));
    }
}