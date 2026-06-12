@extends('layouts.panel')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Clientes</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $customerCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('customers.index') }}" class="text-nowrap text-primary">Ver clientes</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Vehículos</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $vehicleCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                    <i class="fas fa-car"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('vehicles.index') }}" class="text-nowrap text-primary">Ver vehículos</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Mantenimientos</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $maintenanceCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                    <i class="fas fa-tools"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('maintenances.index') }}" class="text-nowrap text-primary">Ver mantenimientos</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Servicios</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $serviceCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <i class="fas fa-concierge-bell"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('services.index') }}" class="text-nowrap text-primary">Ver servicios</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Repuestos</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $sparePartCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                    <i class="fas fa-boxes"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('spareparts.index') }}" class="text-nowrap text-primary">Ver repuestos</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Técnicos</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $technicianCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                    <i class="fas fa-user-cog"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('technicians.index') }}" class="text-nowrap text-primary">Ver técnicos</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Recomendaciones</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $recommendationCount ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('recommendations.index') }}" class="text-nowrap text-primary">Ver recomendaciones</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Mantenimientos recientes</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $latestMaintenances->count() ?? 0 }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <i class="fas fa-history"></i>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-sm">
                            <a href="{{ route('maintenances.index') }}" class="text-nowrap text-primary">Ver detalles</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Últimos servicios</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Servicio</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($latestServices as $service)
                                    <tr>
                                        <td>{{ $service->service_name }}</td>
                                        <td>{{ $service->service_category ?? 'N/A' }}</td>
                                        <td>${{ number_format($service->base_price, 2) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay servicios recientes</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Últimos repuestos</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Pieza</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($latestSpareParts as $sparePart)
                                    <tr>
                                        <td>{{ $sparePart->part_name }}</td>
                                        <td>{{ $sparePart->brand ?? 'N/A' }}</td>
                                        <td>{{ $sparePart->stock_quantity }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay repuestos recientes</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Últimos mantenimientos</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Vehículo</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($latestMaintenances as $maintenance)
                                    <tr>
                                        <td>{{ $maintenance->customer?->full_name ?? 'N/A' }}</td>
                                        <td>{{ $maintenance->vehicle?->plate_number ?? 'N/A' }}</td>
                                        <td>{{ ucfirst($maintenance->status) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay mantenimientos recientes</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
