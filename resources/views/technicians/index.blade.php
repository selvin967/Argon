@extends('layouts.panel')
@section('title', 'Técnicos')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-user-cog"></i> Técnicos</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('technicians.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Técnico
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Especialidad</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($technicians as $technician)
                            <tr>
                                <td>{{ $technician->id }}</td>
                                <td>{{ $technician->full_name }}</td>
                                <td>{{ $technician->email }}</td>
                                <td>{{ $technician->specialty ?? 'N/A' }}</td>
                                <td>
                                    @if($technician->status === 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @elseif($technician->status === 'inactive')
                                        <span class="badge badge-danger">Inactivo</span>
                                    @else
                                        <span class="badge badge-secondary">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('technicians.show', $technician) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('technicians.edit', $technician) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('technicians.destroy', $technician) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este técnico?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No hay técnicos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
