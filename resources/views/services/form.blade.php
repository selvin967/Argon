<div class="card-body">
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="service_name">Nombre del servicio</label>
                <input type="text" name="service_name" id="service_name" class="form-control" value="{{ old('service_name', $service->service_name ?? '') }}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="service_category">Categoría</label>
                <input type="text" name="service_category" id="service_category" class="form-control" value="{{ old('service_category', $service->service_category ?? '') }}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $service->description ?? '') }}</textarea>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="estimated_duration">Duración estimada (min)</label>
                <input type="number" name="estimated_duration" id="estimated_duration" class="form-control" value="{{ old('estimated_duration', $service->estimated_duration ?? '') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="base_price">Precio base</label>
                <input type="number" step="0.01" name="base_price" id="base_price" class="form-control" value="{{ old('base_price', $service->base_price ?? 0) }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="status">Estado</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ old('status', $service->status ?? 'active') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $service->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>
</div>
