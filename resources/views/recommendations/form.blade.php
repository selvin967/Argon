<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="vehicle_id">Vehículo</label>
                <select id="vehicle_id" name="vehicle_id" class="form-control form-control-alternative @error('vehicle_id') is-invalid @enderror">
                    <option value="">Seleccione un vehículo</option>
                    @foreach($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" {{ old('vehicle_id', $recommendation->vehicle_id ?? '') == $vehicle->id ? 'selected' : '' }}>
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
                <label class="form-control-label" for="recommended_date">Fecha recomendada</label>
                <input type="date" id="recommended_date" name="recommended_date" class="form-control form-control-alternative" value="{{ old('recommended_date', $recommendation->recommended_date ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label" for="recommendation_text">Recomendación</label>
                <textarea id="recommendation_text" name="recommendation_text" rows="4" class="form-control form-control-alternative">{{ old('recommendation_text', $recommendation->recommendation_text ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="recommended_mileage">Kilometraje recomendado</label>
                <input type="number" min="0" id="recommended_mileage" name="recommended_mileage" class="form-control form-control-alternative" value="{{ old('recommended_mileage', $recommendation->recommended_mileage ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="priority">Prioridad</label>
                <input type="text" id="priority" name="priority" class="form-control form-control-alternative" value="{{ old('priority', $recommendation->priority ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <select id="status" name="status" class="form-control form-control-alternative">
                    <option value="">Seleccione un estado</option>
                    <option value="active" {{ old('status', $recommendation->status ?? '') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $recommendation->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Botones de acción movidos al footer del contenedor padre --}}
</div>
