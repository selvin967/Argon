<?php

namespace App\Http\Controllers;

use App\Models\Carrer;
use App\Models\Student;
use App\Http\Requests\CarrerRequest;

/**
 * Class CarrerController
 * @package App\Http\Controllers
 */
class CarrerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carrers = Carrer::paginate(15, ['*'], 'page', null, null);
        return view('carrer.index', compact('carrers'))
            ->with('i', (request()->input('page', 1) - 1) * $carrers->perPage());
    }


    // ? F en el chat
    public function create()
    {
        $carrer = new Carrer();
        $students = Student::orderBy('name', 'asc')->get();
        return view('carrer.create', compact('carrer', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarrerRequest $request)
    {
        Carrer::create($request->validated());

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carrer = Carrer::findOrFail($id);
        return view('carrer.show', compact('carrer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carrer = Carrer::findOrFail($id);
        $students = Student::orderBy('name', 'asc')->get();
        return view('carrer.edit', compact('carrer', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarrerRequest $request, Carrer $carrer)
    {
        $carrer->update($request->validated());

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer updated successfully');
    }

    public function destroy(string $id)
    {
        $carrer = Carrer::findOrFail($id);
        $carrer->delete();

        return redirect()->route('carrers.index')
            ->with('success', 'Carrer deleted successfully');
    }
}
