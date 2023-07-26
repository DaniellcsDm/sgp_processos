@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Usuários</h2>
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar Usuário</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tipo de Usuário
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Vinculo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Situação
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs text-secondary mb-0">
                                                {{ $user->userType->type }}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                        </td class="text-center">
                                        <td class="text-center">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Editar
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                        
                                                <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete user" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum usuário encontrado.</td>
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
