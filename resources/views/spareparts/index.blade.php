@extends('layouts.panel')
@section('title', 'Repuestos')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-cogs"></i> Repuestos</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('spareparts.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Repuesto
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
                            <th>Marca</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($spareParts as $sparePart)
                            <tr>
                                <td>{{ $sparePart->id }}</td>
                                <td>{{ $sparePart->part_name }}</td>
                                <td>{{ $sparePart->brand ?? 'N/A' }}</td>
                                <td>{{ $sparePart->unit_price ?? '0.00' }}</td>
                                <td>{{ $sparePart->stock_quantity ?? '0' }}</td>
                                <td>
                                    @if($sparePart->status === 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @elseif($sparePart->status === 'inactive')
                                        <span class="badge badge-danger">Inactivo</span>
                                    @else
                                        <span class="badge badge-secondary">N/A</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('spareparts.show', $sparePart) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('spareparts.edit', $sparePart) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('spareparts.destroy', $sparePart) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este repuesto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">No hay repuestos registrados</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
