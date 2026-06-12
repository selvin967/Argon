@extends('layouts.panel')
@section('title', 'Vehículos')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-car"></i> Vehículos</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('vehicles.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Vehículo
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Matrícula</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cliente</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->plate_number }}</td>
                                <td>{{ $vehicle->brand ?? 'N/A' }}</td>
                                <td>{{ $vehicle->model ?? 'N/A' }}</td>
                                <td>{{ optional($vehicle->customer)->full_name ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('vehicles.destroy', $vehicle) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este vehículo?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No hay vehículos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
