<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="part_name">Nombre del repuesto</label>
                <input type="text" id="part_name" name="part_name" class="form-control form-control-alternative @error('part_name') is-invalid @enderror" value="{{ old('part_name', $sparePart->part_name ?? '') }}" required>
                @error('part_name')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="brand">Marca</label>
                <input type="text" id="brand" name="brand" class="form-control form-control-alternative" value="{{ old('brand', $sparePart->brand ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <textarea id="description" name="description" rows="4" class="form-control form-control-alternative">{{ old('description', $sparePart->description ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="unit_price">Precio unitario</label>
                <input type="number" step="0.01" min="0" id="unit_price" name="unit_price" class="form-control form-control-alternative" value="{{ old('unit_price', $sparePart->unit_price ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="stock_quantity">Stock</label>
                <input type="number" min="0" id="stock_quantity" name="stock_quantity" class="form-control form-control-alternative" value="{{ old('stock_quantity', $sparePart->stock_quantity ?? '') }}">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label" for="supplier">Proveedor</label>
                <input type="text" id="supplier" name="supplier" class="form-control form-control-alternative" value="{{ old('supplier', $sparePart->supplier ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="purchase_date">Fecha de compra</label>
                <input type="date" id="purchase_date" name="purchase_date" class="form-control form-control-alternative" value="{{ old('purchase_date', $sparePart->purchase_date ?? '') }}">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="status">Estado</label>
                <select id="status" name="status" class="form-control form-control-alternative">
                    <option value="">Seleccione un estado</option>
                    <option value="active" {{ old('status', $sparePart->status ?? '') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $sparePart->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ isset($sparePart->id) ? 'Actualizar' : 'Registrar' }}
        </button>
        <a href="{{ route('spareparts.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
