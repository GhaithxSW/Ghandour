<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function index()
    {
        return response()->json(Progress::all());
    }
    public function show($id)
    {
        return response()->json(Progress::findOrFail($id));
    }
    public function store(Request $request)
    {
        return response()->json(Progress::create($request->all()), 201);
    }
    public function update(Request $request, $id)
    {
        $progress = Progress::findOrFail($id);
        $progress->update($request->all());
        return response()->json($progress);
    }
    public function destroy($id)
    {
        Progress::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
