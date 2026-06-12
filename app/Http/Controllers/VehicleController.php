<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        $vehicle = new Vehicle();
        $customers = Customer::all();
        return view('vehicles.create', compact('vehicle', 'customers'));
    }

    public function store(VehicleRequest $request)
    {
        Vehicle::create($request->validated());
        return redirect()->route('vehicles.index')->with('success', 'Vehículo creado exitosamente.');
    }

    public function show(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->load('customer', 'maintenances', 'recommendations');
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $customers = Customer::all();
        return view('vehicles.edit', compact('vehicle', 'customers'));
    }

    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validated());
        return redirect()->route('vehicles.index')->with('success', 'Vehículo actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehículo eliminado exitosamente.');
    }
}
