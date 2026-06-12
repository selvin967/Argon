<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        $service = new Service();
        return view('services.create', compact('service'));
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());
        return redirect()->route('services.index')->with('success', 'Servicio creado exitosamente.');
    }

    public function show(string $id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        return redirect()->route('services.index')->with('success', 'Servicio actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Servicio eliminado exitosamente.');
    }
}
