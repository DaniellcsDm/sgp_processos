@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header mb-0 d-flex justify-content-between">
                <h3>Advogados</h3>
                <a href="{{ route('lawyers.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar Advogado</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nome Completo
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Local de Nascimento
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    WhatsApp
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Situação
                                </th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lawyers as $lawyer)
                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $lawyer->full_name }}</h6>
                                    </td>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $lawyer->birth_place }}</h6>
                                    </td>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $lawyer->whatsapp_1 }}</h6>
                                    </td>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $lawyer->status }}</h6>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('lawyers.edit', $lawyer->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Editar Advogado">
                                            Editar
                                        </a>
                                        <form action="{{ route('lawyers.destroy', $lawyer->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                    
                                            <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Excluir Advogado" onclick="return confirm('Tem certeza que deseja excluir este advogado?')">
                                                Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum advogado encontrado.</td>
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
