@extends('layouts.panel')
@section('title', 'Customers/List')

@section('content')
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-list"></i> Clientes</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i> Nuevo Cliente
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customers as $customer)
                            <tr>
                                <td>
                                    <span class="mb-0 text-sm">{{ $customer->full_name }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-info"></i>
                                        <span class="status">{{ $customer->email }}</span>
                                    </span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm">{{ $customer->phone_number ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    <span class="mb-0 text-sm">{{ $customer->city ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    @if($customer->status == 'active')
                                        <span class="badge badge-success">Activo</span>
                                    @else
                                        <span class="badge badge-danger">Inactivo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('customers.edit', $customer) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Deseas eliminar este cliente?');">
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
                                    <i class="fas fa-inbox"></i> No hay clientes registrados
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
