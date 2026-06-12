<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="full_name">Nombre completo</label>
                <input type="text" id="full_name" name="full_name" class="form-control form-control-alternative @error('full_name') is-invalid @enderror" value="{{ old('full_name', $technician->full_name ?? '') }}" required>
                @error('full_name')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative" value="{{ old('email', $technician->email ?? '') }}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Teléfono</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control form-control-alternative" value="{{ old('phone_number', $technician->phone_number ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">Fecha de ingreso</label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative" value="{{ old('hire_date', $technician->hire_date ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="salary">Salario</label>
                <input type="number" step="0.01" min="0" id="salary" name="salary" class="form-control form-control-alternative" value="{{ old('salary', $technician->salary ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="specialty">Especialidad</label>
                <input type="text" id="specialty" name="specialty" class="form-control form-control-alternative" value="{{ old('specialty', $technician->specialty ?? '') }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <select id="status" name="status" class="form-control form-control-alternative">
                    <option value="">Seleccione un estado</option>
                    <option value="active" {{ old('status', $technician->status ?? '') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $technician->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Botones de acción movidos al footer del contenedor padre --}}
</div>
