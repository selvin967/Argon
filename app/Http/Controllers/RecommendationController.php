<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecommendationRequest;
use App\Models\Recommendation;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index()
    {
        $recommendations = Recommendation::all();
        return view('recommendations.index', compact('recommendations'));
    }

    public function create()
    {
        $recommendation = new Recommendation();
        $vehicles = Vehicle::all();
        return view('recommendations.create', compact('recommendation', 'vehicles'));
    }

    public function store(RecommendationRequest $request)
    {
        Recommendation::create($request->validated());
        return redirect()->route('recommendations.index')->with('success', 'Recomendación creada exitosamente.');
    }

    public function show(string $id)
    {
        $recommendation = Recommendation::findOrFail($id);
        $recommendation->load('vehicle');
        return view('recommendations.show', compact('recommendation'));
    }

    public function edit(string $id)
    {
        $recommendation = Recommendation::findOrFail($id);
        $vehicles = Vehicle::all();
        return view('recommendations.edit', compact('recommendation', 'vehicles'));
    }

    public function update(RecommendationRequest $request, Recommendation $recommendation)
    {
        $recommendation->update($request->validated());
        return redirect()->route('recommendations.index')->with('success', 'Recomendación actualizada exitosamente.');
    }

    public function destroy(string $id)
    {
        $recommendation = Recommendation::findOrFail($id);
        $recommendation->delete();
        return redirect()->route('recommendations.index')->with('success', 'Recomendación eliminada exitosamente.');
    }
}
