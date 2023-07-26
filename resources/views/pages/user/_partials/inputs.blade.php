<div class="mb-3">
    <label for="type_user" class="form-label">Vinculo</label>
    <select name="type_user" id="type_user" class="form-select">
        <option value="1" @if(isset($user) && $user->user_type_id == '1') selected @endif>Administrativo</option>
        <option value="2" @if(isset($user) && $user->user_type_id == '2') selected @endif>Advogado</option>
    </select>
</div>
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name ?? '' }}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email ?? '' }}">
</div>

<div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" name="password" id="password" class="form-control">
</div>

<div class="mb-3">
    <label for="situacao" class="form-label">Situação</label>
    <select name="situacao" id="situacao" class="form-select">
        <option value="Ativo" @if(isset($user) && $user->status == 'Ativo') selected @endif>Ativo</option>
        <option value="Inativo" @if(isset($user) && $user->status == 'Inativo') selected @endif>Inativo</option>
        <option value="Bloqueado" @if(isset($user) && $user->status == 'Bloqueado') selected @endif>Bloqueado</option>
    </select>
</div>