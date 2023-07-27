<div class="form-group">
    <label for="type">Tipo</label>
    <input type="text" class="form-control" id="type" name="type" value="{{ isset($client) ? $client->type : old('type') }}" required>
</div>

<div class="form-group">
    <label for="role">Role</label>
    <input type="text" class="form-control" id="role" name="role" value="{{ isset($client) ? $client->role : old('role') }}" required>
</div>

<div class="form-group">
    <label for="full_name">Nome Completo</label>
    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ isset($client) ? $client->full_name : old('full_name') }}" required>
</div>

<div class="form-group">
    <label for="birth_date">Data de Nascimento</label>
    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ isset($client) ? $client->birth_date : old('birth_date') }}" required>
</div>

<div class="form-group">
    <label for="rg">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="{{ isset($client) ? $client->rg : old('rg') }}" required>
</div>

<div class="form-group">
    <label for="cpf_cnpj">CPF/CNPJ</label>
    <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="{{ isset($client) ? $client->cpf_cnpj : old('cpf_cnpj') }}" required>
</div>

<div class="form-group">
    <label for="gender">Gênero</label>
    <select class="form-control" id="gender" name="gender" required>
        <option value="Masculino" {{ isset($client) && $client->gender === 'Masculino' ? 'selected' : '' }}>Masculino</option>
        <option value="Feminino" {{ isset($client) && $client->gender === 'Feminino' ? 'selected' : '' }}>Feminino</option>
        <option value="Indefinido" {{ isset($client) && $client->gender === 'Indefinido' ? 'selected' : '' }}>Indefinido</option>
    </select>
</div>

<div class="form-group">
    <label for="profession">Profissão</label>
    <input type="text" class="form-control" id="profession" name="profession" value="{{ isset($client) ? $client->profession : old('profession') }}" required>
</div>

<div class="form-group">
    <label for="education">Escolaridade</label>
    <input type="text" class="form-control" id="education" name="education" value="{{ isset($client) ? $client->education : old('education') }}" required>
</div>

<div class="form-group">
    <label for="birth_place">Naturalidade</label>
    <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ isset($client) ? $client->birth_place : old('birth_place') }}" required>
</div>

<div class="form-group">
    <label for="marital_status">Estado Civil</label>
    <select class="form-control" id="marital_status" name="marital_status" required>
        <option value="Solteiro(a)" @if(isset($client) && $client->marital_status == 'Solteiro(a)') selected @endif>Solteiro(a)</option>
        <option value="Casado(a)" @if(isset($client) && $client->marital_status == 'Casado(a)') selected @endif>Casado(a)</option>
        <option value="Divorciado(a)" @if(isset($client) && $client->marital_status == 'Divorciado(a)') selected @endif>Divorciado(a)</option>
        <option value="Viúvo(a)" @if(isset($client) && $client->marital_status == 'Viúvo(a)') selected @endif>Viúvo(a)</option>
        <option value="Outro" @if(isset($client) && $client->marital_status == 'Outro') selected @endif>Outro</option>
    </select>
</div>

<div class="form-group">
    <label for="personal_email">Email Pessoal</label>
    <input type="email" class="form-control" id="personal_email" name="personal_email" value="{{ isset($client) ? $client->personal_email : old('personal_email') }}" required>
</div>

<div class="form-group">
    <label for="commercial_email">Email Comercial</label>
    <input type="email" class="form-control" id="commercial_email" name="commercial_email" value="{{ isset($client) ? $client->commercial_email : old('commercial_email') }}" required>
</div>

<div class="form-group">
    <label for="mother_name">Nome da Mãe</label>
    <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ isset($client) ? $client->mother_name : old('mother_name') }}" required>
</div>

<div class="form-group">
    <label for="father_name">Nome do Pai</label>
    <input type="text" class="form-control" id="father_name" name="father_name" value="{{ isset($client) ? $client->father_name : old('father_name') }}" required>
</div>

<div class="form-group">
    <label for="whatsapp_1">WhatsApp I</label>
    <input type="text" class="form-control" id="whatsapp_1" name="whatsapp_1" value="{{ isset($client) ? $client->whatsapp_1 : old('whatsapp_1') }}" required>
</div>

<div class="form-group">
    <label for="whatsapp_2">WhatsApp II</label>
    <input type="text" class="form-control" id="whatsapp_2" name="whatsapp_2" value="{{ isset($client) ? $client->whatsapp_2 : old('whatsapp_2') }}">
</div>

<div class="form-group">
    <label for="zip_code">CEP</label>
    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ isset($client) ? $client->zip_code : old('zip_code') }}" required>
</div>
<div class="form-group">
    <label for="address">Endereço</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ isset($client) ? $client->address : old('address') }}" required>
</div>

<div class="form-group">
    <label for="address_number">Número do Endereço</label>
    <input type="text" class="form-control" id="address_number" name="address_number" value="{{ isset($client) ? $client->address_number : old('address_number') }}" required>
</div>

<div class="form-group">
    <label for="address_complement">Complemento do Endereço</label>
    <input type="text" class="form-control" id="address_complement" name="address_complement" value="{{ isset($client) ? $client->address_complement : old('address_complement') }}">
</div>

<div class="form-group">
    <label for="neighborhood">Bairro</label>
    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ isset($client) ? $client->neighborhood : old('neighborhood') }}" required>
</div>

<div class="form-group">
    <label for="city">Cidade</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ isset($client) ? $client->city : old('city') }}" required>
</div>

<div class="form-group">
    <label for="state">Estado</label>
    <input type="text" class="form-control" id="state" name="state" value="{{ isset($client) ? $client->state : old('state') }}" required>
</div>

<div class="form-group">
    <label for="inclusion_date">Arquivo</label>
    <input type="date" class="form-control" id="inclusion_date" name="inclusion_date" value="{{ isset($client) ? $client->inclusion_date : old('inclusion_date') }}" required>
</div>

<div class="form-group">
    <label for="status">Situação</label>
    <select class="form-control" id="status" name="status" required>
        <option value="Ativo" @if(isset($client) && $client->status == 'Ativo') selected @endif>Ativo</option>
        <option value="Inativo" @if(isset($client) && $client->marital_status == 'Inativo') selected @endif>Inativo</option>
    </select>
</div>