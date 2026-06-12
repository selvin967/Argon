@extends('layouts.panel')
@section('title', 'Mantenimientos')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-tools"></i> Mantenimientos</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('maintenances.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Mantenimiento
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Vehículo</th>
                            <th>Técnico</th>
                            <th>Servicio</th>
                            <th>Entrada</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($maintenances as $maintenance)
                            <tr>
                                <td>{{ $maintenance->id }}</td>
                                <td>{{ optional($maintenance->vehicle)->plate_number ?? 'N/A' }}</td>
                                <td>{{ optional($maintenance->technician)->full_name ?? 'N/A' }}</td>
                                <td>{{ $maintenance->service_type ?? 'N/A' }}</td>
                                <td>{{ $maintenance->entry_date?->format('d/m/Y') ?? 'N/A' }}</td>
                                <td>{{ $maintenance->total_cost ?? '0.00' }}</td>
                                <td>
                                    <a href="{{ route('maintenances.show', $maintenance) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('maintenances.edit', $maintenance) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('maintenances.destroy', $maintenance) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este mantenimiento?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">No hay mantenimientos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
