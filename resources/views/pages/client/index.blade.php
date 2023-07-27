@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Clientes</h2>
                    <a href="{{ route('clients.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar cliente</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tipo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Polo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nome
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        CPF
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Situação
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clients as $client)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $client->title }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $client->slug }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $client->position }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $client->icon }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $client->status }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Editar cliente">
                                                Editar
                                            </a>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                        
                                                <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete cliente" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Nenhum cliente encontrado.</td>
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
