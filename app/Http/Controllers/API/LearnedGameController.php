<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LearnedGame;
class LearnedGameController extends Controller
{
    public function index()
    {
        return response()->json(LearnedGame::all());
    }
    public function show($id)
    {
        return response()->json(LearnedGame::findOrFail($id));
    }
    public function store(Request $request)
    {
        return response()->json(LearnedGame::create($request->all()), 201);
    }
    public function update(Request $request, $id)
    {
        $learnedGame = LearnedGame::findOrFail($id);
        $learnedGame->update($request->all());
        return response()->json($learnedGame);
    }
    public function destroy($id)
    {
        LearnedGame::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
