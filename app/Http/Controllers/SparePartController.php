<?php

namespace App\Http\Controllers;

use App\Http\Requests\SparePartRequest;
use App\Models\SparePart;
use Illuminate\Http\Request;

class SparePartController extends Controller
{
    public function index()
    {
        $spareParts = SparePart::all();
        return view('spareparts.index', compact('spareParts'));
    }

    public function create()
    {
        $sparePart = new SparePart();
        return view('spareparts.create', compact('sparePart'));
    }

    public function store(SparePartRequest $request)
    {
        SparePart::create($request->validated());
        return redirect()->route('spareparts.index')->with('success', 'Repuesto creado exitosamente.');
    }

    public function show(string $id)
    {
        $sparePart = SparePart::findOrFail($id);
        return view('spareparts.show', compact('sparePart'));
    }

    public function edit(string $id)
    {
        $sparePart = SparePart::findOrFail($id);
        return view('spareparts.edit', compact('sparePart'));
    }

    public function update(SparePartRequest $request, SparePart $sparePart)
    {
        $sparePart->update($request->validated());
        return redirect()->route('spareparts.index')->with('success', 'Repuesto actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $sparePart = SparePart::findOrFail($id);
        $sparePart->delete();
        return redirect()->route('spareparts.index')->with('success', 'Repuesto eliminado exitosamente.');
    }
}
