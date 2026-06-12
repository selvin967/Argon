@extends('layouts.panel')
@section('title', 'SpareParts/List')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-puzzle-piece"></i> Repuestos</h3>
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
                            <th scope="col">Nombre de la Pieza</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Precio Unitario</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($spareParts as $sparePart)
                            <tr>
                                <td>
                                    <span class="mb-0 text-sm">{{ $sparePart->part_name }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">{{ $sparePart->brand ?? 'Sin marca' }}</span>
                                    </span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm font-weight-bold">${{ number_format($sparePart->unit_price, 2) }}</span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm">
                                        @if($sparePart->stock_quantity > 0)
                                            <span class="badge badge-success">{{ $sparePart->stock_quantity }}</span>
                                        @else
                                            <span class="badge badge-danger">{{ $sparePart->stock_quantity }}</span>
                                        @endif
                                    </span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm">{{ $sparePart->supplier ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    @if($sparePart->status == 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @else
                                        <span class="badge badge-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('spareparts.show', $sparePart) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('spareparts.edit', $sparePart) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('spareparts.destroy', $sparePart) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Deseas eliminar este repuesto?');">
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
                                <td colspan="7" class="text-center text-muted py-4">
                                    <i class="fas fa-inbox"></i> No hay repuestos registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
