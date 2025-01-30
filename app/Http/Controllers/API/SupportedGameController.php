<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SupportedGame;

class SupportedGameController extends Controller
{
    public function index()
    {
        return response()->json(SupportedGame::all());
    }
    public function show($id)
    {
        return response()->json(SupportedGame::findOrFail($id));
    }
    public function store(Request $request)
    {
        return response()->json(SupportedGame::create($request->all()), 201);
    }
    public function update(Request $request, $id)
    {
        $supportedGame = SupportedGame::findOrFail($id);
        $supportedGame->update($request->all());
        return response()->json($supportedGame);
    }
    public function destroy($id)
    {
        SupportedGame::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
