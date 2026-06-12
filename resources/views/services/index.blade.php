@extends('layouts.panel')
@section('title', 'Services/List')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-cog"></i> Servicios</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('services.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Servicio
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre del Servicio</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Duración Estimada</th>
                            <th scope="col">Precio Base</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td>
                                    <span class="mb-0 text-sm">{{ $service->service_name }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-info"></i>
                                        <span class="status">{{ $service->service_category ?? 'Sin categoría' }}</span>
                                    </span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm">
                                        @if($service->estimated_duration)
                                            {{ $service->estimated_duration }} min
                                        @else
                                            N/A
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm font-weight-bold">${{ number_format($service->base_price, 2) }}</span>
                                </td>
                                <td>
                                    @if($service->status == 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @else
                                        <span class="badge badge-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('services.show', $service) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Deseas eliminar este servicio?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fas fa-inbox"></i> No hay servicios registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
