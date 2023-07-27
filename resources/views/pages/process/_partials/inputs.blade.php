 <div class="form-group">
    <label for="active_party_id">Parte Ativa</label>
    <select class="form-control" id="active_party_id" name="active_party_id" required>
        @foreach ($active_clients as $client)
            <option value="{{ $client->id }}" @if(isset($process) && $process->active_party_id == $client->id) selected @endif>{{ $client->full_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="passive_party_id">Parte Passiva</label>
    <select class="form-control" id="passive_party_id" name="passive_party_id" required>
        @foreach ($passive_clientss as $client)
            <option value="{{ $client->id }}" @if(isset($process) && $process->passive_party_id == $client->id) selected @endif>{{ $client->full_name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="number">Número do Processo</label>
    <input type="text" class="form-control" id="number" name="number" value="{{ isset($process) ? $process->number : old('number') }}" required>
</div>

<div class="form-group">
    <label for="autuation_date">Data de Autuação</label>
    <input type="date" class="form-control" id="autuation_date" name="autuation_date" value="{{ isset($process) ? $process->autuation_date : old('autuation_date') }}" required>
</div>

<div class="form-group">
    <label for="court">Órgão Julgador</label>
    <input type="text" class="form-control" id="court" name="court" value="{{ isset($process) ? $process->court : old('court') }}" required>
</div>

<div class="form-group">
    <label for="judge">Juiz</label>
    <input type="text" class="form-control" id="judge" name="judge" value="{{ isset($process) ? $process->judge : old('judge') }}" required>
</div>

<div class="form-group">
    <label for="action_class">Classe da Ação</label>
    <input type="text" class="form-control" id="action_class" name="action_class" value="{{ isset($process) ? $process->action_class : old('action_class') }}" required>
</div>

<div class="form-group">
    <label for="subjects">Assuntos</label>
    <select multiple class="form-control" id="subjects" name="subjects[]" required>
        @foreach ($selectors as $selector)
            <option value="{{ $selector->id }}" @if(isset($process) && $process->subjects->contains($selector->id)) selected @endif>{{ $selector->description }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="value">Valor da Causa</label>
    <input type="number" step="0.01" class="form-control" id="value" name="value" value="{{ isset($process) ? $process->value : old('value') }}" required>
</div>

<div class="form-group">
    <label for="status">Situação</label>
    <select class="form-control" id="status" name="status" required>
        <option value="Ativo" @if(isset($process) && $process->status == 'Ativo') selected @endif>Ativo</option>
        <option value="Inativo" @if(isset($process) && $process->status == 'Inativo') selected @endif>Inativo</option>
        <option value="Concluído" @if(isset($process) && $process->status == 'Concluído') selected @endif>Concluído</option>
        <option value="Arquivado" @if(isset($process) && $process->status == 'Arquivado') selected @endif>Arquivado</option>
    </select>
</div>
