<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceRequest;
use App\Models\Maintenance;
use App\Models\Technician;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function index()
    {
        $maintenances = Maintenance::all();
        return view('maintenances.index', compact('maintenances'));
    }

    public function create()
    {
        $maintenance = new Maintenance();
        $vehicles = Vehicle::all();
        $technicians = Technician::all();
        return view('maintenances.create', compact('maintenance', 'vehicles', 'technicians'));
    }

    public function store(MaintenanceRequest $request)
    {
        $data = $request->validated();
        $data['total_cost'] = $data['total_cost'] ?? (($data['spare_parts_cost'] ?? 0) + ($data['labor_cost'] ?? 0));
        Maintenance::create($data);
        return redirect()->route('maintenances.index')->with('success', 'Mantenimiento creado exitosamente.');
    }

    public function show(string $id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->load('vehicle', 'technician');
        return view('maintenances.show', compact('maintenance'));
    }

    public function edit(string $id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $vehicles = Vehicle::all();
        $technicians = Technician::all();
        return view('maintenances.edit', compact('maintenance', 'vehicles', 'technicians'));
    }

    public function update(MaintenanceRequest $request, Maintenance $maintenance)
    {
        $data = $request->validated();
        $data['total_cost'] = $data['total_cost'] ?? (($data['spare_parts_cost'] ?? 0) + ($data['labor_cost'] ?? 0));
        $maintenance->update($data);
        return redirect()->route('maintenances.index')->with('success', 'Mantenimiento actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->delete();
        return redirect()->route('maintenances.index')->with('success', 'Mantenimiento eliminado exitosamente.');
    }
}
