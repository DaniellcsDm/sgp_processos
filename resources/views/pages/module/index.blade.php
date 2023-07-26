@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Modulos</h2>
                    <a href="{{ route('modules.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar módulo</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titulo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Url Amigável
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Posicionamento no Menu
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Ícone
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Situação
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($modules as $module)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $module->title }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $module->slug }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $module->position }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $module->icon }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $module->status }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit module">
                                                Editar
                                            </a>
                                            <form action="{{ route('modules.destroy', $module->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                        
                                                <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user" onclick="return confirm('Tem certeza que deseja excluir este módulo?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum modulo encontrado.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
