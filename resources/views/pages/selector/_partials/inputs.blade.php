
<div class="mb-3">
    <label for="category" class="form-label">Categoria</label>
    <input type="text" class="form-control" id="category" name="category" value="{{ isset($selector) ? $selector->category : old('category') }}" required>
</div>

<div class="mb-3">
    <label for="sub_category" class="form-label">Subcategoria</label>
    <input type="text" class="form-control" id="sub_category" name="sub_category" value="{{ isset($selector) ? $selector->sub_category : old('sub_category') }}" required>
</div>

<div class="mb-3">
    <label for="external_code" class="form-label">Código Externo</label>
    <input type="text" class="form-control" id="external_code" name="external_code" value="{{ isset($selector) ? $selector->external_code : old('external_code') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ isset($selector) ? $selector->description : old('description') }}" required>
</div>

<div class="mb-3">
    <label for="is_principal" class="form-label">Principal</label>
    <select class="form-select" id="is_principal" name="is_principal" required>
        <option value="1" @if(isset($selector) && $selector->is_principal) selected @endif>Sim</option>
        <option value="0" @if(isset($selector) && !$selector->is_principal) selected @endif>Não</option>
    </select>
</div>
