<h6 class="heading-small text-muted mb-4">Datos Principales</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="full_name">Nombre Completo</label>
                <input type="text" id="full_name" name="full_name"
                    class="form-control form-control-alternative @error('full_name') is-invalid @enderror"
                    placeholder="Nombre completo"
                    value="{{ old('full_name', $customer->full_name ?? '') }}" required>
                @error('full_name')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control form-control-alternative @error('email') is-invalid @enderror"
                    placeholder="correo@ejemplo.com"
                    value="{{ old('email', $customer->email ?? '') }}" required>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="phone_number">Teléfono</label>
                <input type="text" id="phone_number" name="phone_number"
                    class="form-control form-control-alternative"
                    placeholder="Teléfono"
                    value="{{ old('phone_number', $customer->phone_number ?? '') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="city">Ciudad</label>
                <input type="text" id="city" name="city"
                    class="form-control form-control-alternative"
                    placeholder="Ciudad"
                    value="{{ old('city', $customer->city ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address"
                    class="form-control form-control-alternative"
                    placeholder="Dirección"
                    value="{{ old('address', $customer->address ?? '') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="registration_day">Fecha de Registro</label>
                <input type="date" id="registration_day" name="registration_day"
                    class="form-control form-control-alternative"
                    value="{{ old('registration_day', $customer->registration_day ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <select id="status" name="status" class="form-control form-control-alternative">
                    <option value="">Seleccione un estado</option>
                    <option value="active" {{ old('status', $customer->status ?? '') == 'active' ? 'selected' : '' }}>
                        Activo
                    </option>
                    <option value="inactive" {{ old('status', $customer->status ?? '') == 'inactive' ? 'selected' : '' }}>
                        Inactivo
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>


