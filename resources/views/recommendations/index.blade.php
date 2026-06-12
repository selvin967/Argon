@extends('layouts.panel')
@section('title', 'Recomendaciones')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-lightbulb"></i> Recomendaciones</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('recommendations.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nueva Recomendación
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
                            <th>Fecha</th>
                            <th>Prioridad</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recommendations as $recommendation)
                            <tr>
                                <td>{{ $recommendation->id }}</td>
                                <td>{{ optional($recommendation->vehicle)->plate_number ?? 'N/A' }}</td>
                                <td>{{ $recommendation->recommended_date?->format('d/m/Y') ?? 'N/A' }}</td>
                                <td>{{ $recommendation->priority ?? 'N/A' }}</td>
                                <td>
                                    @if($recommendation->status === 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @elseif($recommendation->status === 'inactive')
                                        <span class="badge badge-danger">Inactivo</span>
                                    @else
                                        <span class="badge badge-secondary">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('recommendations.show', $recommendation) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('recommendations.edit', $recommendation) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('recommendations.destroy', $recommendation) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar esta recomendación?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No hay recomendaciones registradas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
