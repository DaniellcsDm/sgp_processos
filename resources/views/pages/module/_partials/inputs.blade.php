
    <!-- Campo Título -->
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ isset($module) ? $module->title : old('title') }}" required>
    </div>

    <!-- Campo URL Amigável -->
    <div class="form-group">
        <label for="slug">URL Amigável</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ isset($module) ? $module->slug : old('slug') }}" required>
    </div>

    <!-- Campo Posicionamento no Menu -->
    <div class="form-group">
        <label for="position">Posicionamento no Menu</label>
        <input type="text" class="form-control" id="position" name="position" value="{{ isset($module) ? $module->position : old('position') }}" required>
    </div>

    <!-- Campo Ícone -->
    <div class="form-group">
        <label for="icon">Ícone</label>
        <input type="text" class="form-control" id="icon" name="icon" value="{{ isset($module) ? $module->icon : old('icon') }}" required>
    </div>

    <!-- Campo Situação -->
    <div class="form-group">
        <label for="status">Situação</label>
        <select class="form-control" id="status" name="status" required>
            <option value="Ativo" @if(isset($module) && $module->status == 'Ativo') selected @endif>Ativo</option>
            <option value="Inativo" @if(isset($module) && $module->status == 'Inativo') selected @endif>Inativo</option>
        </select>
    </div>
