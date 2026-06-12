<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="plate_number">Matrícula</label>
                <input type="text" id="plate_number" name="plate_number" class="form-control form-control-alternative @error('plate_number') is-invalid @enderror" value="{{ old('plate_number', $vehicle->plate_number ?? '') }}" required>
                @error('plate_number')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand">Marca</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative" value="{{ old('brand', $vehicle->brand ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="model">Modelo</label>
                <select id="model" name="model" class="form-control form-control-alternative">
                    <option value="">Seleccione un modelo</option>
                    <option value="car" {{ old('model', $vehicle->model ?? '') == 'car' ? 'selected' : '' }}>Car</option>
                    <option value="suv" {{ old('model', $vehicle->model ?? '') == 'suv' ? 'selected' : '' }}>SUV</option>
                    <option value="truck" {{ old('model', $vehicle->model ?? '') == 'truck' ? 'selected' : '' }}>Truck</option>
                    <option value="coupe" {{ old('model', $vehicle->model ?? '') == 'coupe' ? 'selected' : '' }}>Coupe</option>
                </select>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="year">Año</label>
                <input type="number" min="1900" max="2100" id="year" name="year" class="form-control form-control-alternative" value="{{ old('year', $vehicle->year ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="color">Color</label>
                <input type="text" id="color" name="color" class="form-control form-control-alternative" value="{{ old('color', $vehicle->color ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="fuel_type">Combustible</label>
                <select id="fuel_type" name="fuel_type" class="form-control form-control-alternative">
                    <option value="">Seleccione un tipo</option>
                    <option value="gasoline" {{ old('fuel_type', $vehicle->fuel_type ?? '') == 'gasoline' ? 'selected' : '' }}>Gasolina</option>
                    <option value="diesel" {{ old('fuel_type', $vehicle->fuel_type ?? '') == 'diesel' ? 'selected' : '' }}>Diésel</option>
                    <option value="electric" {{ old('fuel_type', $vehicle->fuel_type ?? '') == 'electric' ? 'selected' : '' }}>Eléctrico</option>
                    <option value="hybrid" {{ old('fuel_type', $vehicle->fuel_type ?? '') == 'hybrid' ? 'selected' : '' }}>Híbrido</option>
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="customer_id">Cliente</label>
                <select id="customer_id" name="customer_id" class="form-control form-control-alternative @error('customer_id') is-invalid @enderror">
                    <option value="">Seleccione un cliente</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ old('customer_id', $vehicle->customer_id ?? '') == $customer->id ? 'selected' : '' }}>
                            {{ $customer->full_name }}
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ isset($vehicle->id) ? 'Actualizar' : 'Registrar' }}
        </button>
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
