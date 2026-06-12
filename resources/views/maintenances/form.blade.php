@php
    /** @var \App\Models\Maintenance $maintenance */
    /** @var \Illuminate\Database\Eloquent\Collection|array $vehicles */
    /** @var \Illuminate\Database\Eloquent\Collection|array $technicians */
@endphp

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_id">Vehículo</label>
                <select id="vehicle_id" name="vehicle_id" class="form-control form-control-alternative @error('vehicle_id') is-invalid @enderror">
                    <option value="">Seleccione un vehículo</option>
                    @foreach($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" {{ old('vehicle_id', $maintenance->vehicle_id ?? '') == $vehicle->id ? 'selected' : '' }}>
                            {{ $vehicle->plate_number }} - {{ $vehicle->brand }} {{ $vehicle->model }}
                        </option>
                    @endforeach
                </select>
                @error('vehicle_id')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="technician_id">Técnico</label>
                <select id="technician_id" name="technician_id" class="form-control form-control-alternative @error('technician_id') is-invalid @enderror">
                    <option value="">Seleccione un técnico</option>
                    @foreach($technicians as $technician)
                        <option value="{{ $technician->id }}" {{ old('technician_id', $maintenance->technician_id ?? '') == $technician->id ? 'selected' : '' }}>
                            {{ $technician->full_name }}
                        </option>
                    @endforeach
                </select>
                @error('technician_id')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="service_type">Tipo de servicio</label>
                <select id="service_type" name="service_type" class="form-control form-control-alternative">
                    <option value="">Seleccione un tipo</option>
                    <option value="routine" {{ old('service_type', $maintenance->service_type ?? '') == 'routine' ? 'selected' : '' }}>Routine</option>
                    <option value="major" {{ old('service_type', $maintenance->service_type ?? '') == 'major' ? 'selected' : '' }}>Major</option>
                    <option value="minor" {{ old('service_type', $maintenance->service_type ?? '') == 'minor' ? 'selected' : '' }}>Minor</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="entry_date">Fecha de entrada</label>
                <input type="date" id="entry_date" name="entry_date" class="form-control form-control-alternative" value="{{ old('entry_date', $maintenance->entry_date ?? '') }}">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="estimated_delivery_date">Fecha estimada entrega</label>
                <input type="date" id="estimated_delivery_date" name="estimated_delivery_date" class="form-control form-control-alternative" value="{{ old('estimated_delivery_date', $maintenance->estimated_delivery_date ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="current_mileage">Kilometraje actual</label>
                <input type="number" id="current_mileage" name="current_mileage" min="0" class="form-control form-control-alternative" value="{{ old('current_mileage', $maintenance->current_mileage ?? '') }}">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="spare_parts_cost">Costo repuestos</label>
                <input type="number" step="0.01" min="0" id="spare_parts_cost" name="spare_parts_cost" class="form-control form-control-alternative" value="{{ old('spare_parts_cost', $maintenance->spare_parts_cost ?? '') }}">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="labor_cost">Costo mano de obra</label>
                <input type="number" step="0.01" min="0" id="labor_cost" name="labor_cost" class="form-control form-control-alternative" value="{{ old('labor_cost', $maintenance->labor_cost ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label" for="work_description">Descripción del trabajo</label>
                <textarea id="work_description" name="work_description" rows="4" class="form-control form-control-alternative">{{ old('work_description', $maintenance->work_description ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="total_cost">Costo total</label>
                <input type="number" step="0.01" min="0" id="total_cost" name="total_cost" class="form-control form-control-alternative" value="{{ old('total_cost', $maintenance->total_cost ?? '') }}">
            </div>
        </div>
    </div>

    {{-- Botones de acción movidos al footer del contenedor padre --}}
</div>
