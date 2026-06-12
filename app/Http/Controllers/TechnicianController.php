<?php

namespace App\Http\Controllers;

use App\Http\Requests\TechnicianRequest;
use App\Models\Technician;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();
        return view('technicians.index', compact('technicians'));
    }

    public function create()
    {
        $technician = new Technician();
        return view('technicians.create', compact('technician'));
    }

    public function store(TechnicianRequest $request)
    {
        Technician::create($request->validated());
        return redirect()->route('technicians.index')->with('success', 'Técnico creado exitosamente.');
    }

    public function show(string $id)
    {
        $technician = Technician::findOrFail($id);
        return view('technicians.show', compact('technician'));
    }

    public function edit(string $id)
    {
        $technician = Technician::findOrFail($id);
        return view('technicians.edit', compact('technician'));
    }

    public function update(TechnicianRequest $request, Technician $technician)
    {
        $technician->update($request->validated());
        return redirect()->route('technicians.index')->with('success', 'Técnico actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $technician = Technician::findOrFail($id);
        $technician->delete();
        return redirect()->route('technicians.index')->with('success', 'Técnico eliminado exitosamente.');
    }
}
