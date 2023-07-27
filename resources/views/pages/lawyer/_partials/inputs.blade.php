<div class="mb-3">
    <label for="full_name" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ isset($lawyer) ? $lawyer->full_name : old('full_name') }}" required>
</div>

<div class="mb-3">
    <label for="birth_date" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ isset($lawyer) ? $lawyer->birth_date : old('birth_date') }}">
</div>

<div class="mb-3">
    <label for="rg" class="form-label">RG</label>
    <input type="text" class="form-control" id="rg" name="rg" value="{{ isset($lawyer) ? $lawyer->rg : old('rg') }}">
</div>

<div class="mb-3">
    <label for="cpf_cnpj" class="form-label">CPF/CNPJ</label>
    <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="{{ isset($lawyer) ? $lawyer->cpf_cnpj : old('cpf_cnpj') }}" required>
</div>

<div class="mb-3">
    <label for="gender" class="form-label">Gênero</label>
    <select class="form-select" id="gender" name="gender">
        <option value="Masculino" @if(isset($lawyer) && $lawyer->gender == 'Masculino') selected @endif>Masculino</option>
        <option value="Feminino" @if(isset($lawyer) && $lawyer->gender == 'Feminino') selected @endif>Feminino</option>
        <option value="Indefinido" @if(isset($lawyer) && $lawyer->gender == 'Indefinido') selected @endif>Indefinido</option>
    </select>
</div>

<div class="mb-3">
    <label for="registration_number" class="form-label">Número de Inscrição</label>
    <input type="text" class="form-control" id="registration_number" name="registration_number" value="{{ isset($lawyer) ? $lawyer->registration_number : old('registration_number') }}" required>
</div>

<div class="mb-3">
    <label for="education" class="form-label">Escolaridade</label>
    <input type="text" class="form-control" id="education" name="education" value="{{ isset($lawyer) ? $lawyer->education : old('education') }}">
</div>

<div class="mb-3">
    <label for="birth_place" class="form-label">Local de Nascimento</label>
    <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ isset($lawyer) ? $lawyer->birth_place : old('birth_place') }}">
</div>

<div class="mb-3">
    <label for="marital_status" class="form-label">Estado Civil</label>
    <input type="text" class="form-control" id="marital_status" name="marital_status" value="{{ isset($lawyer) ? $lawyer->marital_status : old('marital_status') }}">
</div>

<div class="mb-3">
    <label for="personal_email" class="form-label">E-mail Pessoal</label>
    <input type="email" class="form-control" id="personal_email" name="personal_email" value="{{ isset($lawyer) ? $lawyer->personal_email : old('personal_email') }}">
</div>

<div class="mb-3">
    <label for="commercial_email" class="form-label">E-mail Comercial</label>
    <input type="email" class="form-control" id="commercial_email" name="commercial_email" value="{{ isset($lawyer) ? $lawyer->commercial_email : old('commercial_email') }}">
</div>

<div class="mb-3">
    <label for="mother_name" class="form-label">Nome da Mãe</label>
    <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ isset($lawyer) ? $lawyer->mother_name : old('mother_name') }}">
</div>

<div class="mb-3">
    <label for="father_name" class="form-label">Nome do Pai</label>
    <input type="text" class="form-control" id="father_name" name="father_name" value="{{ isset($lawyer) ? $lawyer->father_name : old('father_name') }}">
</div>

<div class="mb-3">
    <label for="whatsapp_1" class="form-label">WhatsApp I</label>
    <input type="text" class="form-control" id="whatsapp_1" name="whatsapp_1" value="{{ isset($lawyer) ? $lawyer->whatsapp_1 : old('whatsapp_1') }}">
</div>

<div class="mb-3">
    <label for="whatsapp_2" class="form-label">WhatsApp II</label>
    <input type="text" class="form-control" id="whatsapp_2" name="whatsapp_2" value="{{ isset($lawyer) ? $lawyer->whatsapp_2 : old('whatsapp_2') }}">
</div>

<div class="mb-3">
    <label for="zip_code" class="form-label">CEP</label>
    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ isset($lawyer) ? $lawyer->zip_code : old('zip_code') }}">
</div>

<div class="mb-3">
    <label for="address" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ isset($lawyer) ? $lawyer->address : old('address') }}">
</div>

<div class="mb-3">
    <label for="address_number" class="form-label">Número do Endereço</label>
    <input type="text" class="form-control" id="address_number" name="address_number" value="{{ isset($lawyer) ? $lawyer->address_number : old('address_number') }}">
</div>

<div class="mb-3">
    <label for="address_complement" class="form-label">Complemento do Endereço</label>
    <input type="text" class="form-control" id="address_complement" name="address_complement" value="{{ isset($lawyer) ? $lawyer->address_complement : old('address_complement') }}">
</div>

<div class="mb-3">
    <label for="neighborhood" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="{{ isset($lawyer) ? $lawyer->neighborhood : old('neighborhood') }}">
</div>

<div class="mb-3">
    <label for="city" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="city" name="city" value="{{ isset($lawyer) ? $lawyer->city : old('city') }}">
</div>

<div class="mb-3">
    <label for="state" class="form-label">Estado</label>
    <input type="text" class="form-control" id="state" name="state" value="{{ isset($lawyer) ? $lawyer->state : old('state') }}">
</div>

<div class="mb-3">
    <label for="inclusion_date" class="form-label">Data de Inclusão</label>
    <input type="date" class="form-control" id="inclusion_date" name="inclusion_date" value="{{ isset($lawyer) ? $lawyer->inclusion_date : old('inclusion_date') }}">
</div>

<div class="mb-3">
    <label for="status" class="form-label">Situação</label>
    <select class="form-select" id="status" name="status" required>
        <option value="Ativo" @if(isset($lawyer) && $lawyer->status == 'Ativo') selected @endif>Ativo</option>
        <option value="Inativo" @if(isset($lawyer) && $lawyer->status == 'Inativo') selected @endif>Inativo</option>
        <option value="Bloqueado" @if(isset($lawyer) && $lawyer->status == 'Bloqueado') selected @endif>Bloqueado</option>
    </select>
</div>
