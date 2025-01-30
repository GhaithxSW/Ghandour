<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scene;
class SceneController extends Controller
{
    public function index()
    {
        return response()->json(Scene::all());
    }
    public function show($id)
    {
        return response()->json(Scene::findOrFail($id));
    }
    public function store(Request $request)
    {
        return response()->json(Scene::create($request->all()), 201);
    }
    public function update(Request $request, $id)
    {
        $scene = Scene::findOrFail($id);
        $scene->update($request->all());
        return response()->json($scene);
    }
    public function destroy($id)
    {
        Scene::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
