<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="part_name">Nombre de la pieza</label>
                <input type="text" name="part_name" id="part_name" class="form-control" value="{{ old('part_name', $sparePart->part_name ?? '') }}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="brand">Marca</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $sparePart->brand ?? '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $sparePart->description ?? '') }}</textarea>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="unit_price">Precio unitario</label>
                <input type="number" step="0.01" name="unit_price" id="unit_price" class="form-control" value="{{ old('unit_price', $sparePart->unit_price ?? 0) }}">
            </div>
            <div class="form-group">
                <label for="stock_quantity">Cantidad en stock</label>
                <input type="number" name="stock_quantity" id="stock_quantity" class="form-control" value="{{ old('stock_quantity', $sparePart->stock_quantity ?? 0) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="supplier">Proveedor</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="{{ old('supplier', $sparePart->supplier ?? '') }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="purchase_date">Fecha de compra</label>
                <input type="date" name="purchase_date" id="purchase_date" class="form-control" value="{{ old('purchase_date', optional($sparePart->purchase_date)->format('Y-m-d') ?? '') }}">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="status">Estado</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ old('status', $sparePart->status ?? 'active') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $sparePart->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>
</div>
