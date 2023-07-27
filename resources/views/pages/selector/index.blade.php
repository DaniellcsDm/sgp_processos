@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Selecionadores</h3>
                    <a href="{{ route('selectors.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar Selecionador</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Subcategoria</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Código Externo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descrição</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Principal</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($selectors as $selector)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $selector->category }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $selector->sub_category }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $selector->external_code }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $selector->description }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $selector->is_principal ? 'Sim' : 'Não' }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('selectors.edit', $selector->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Editar Selecionador">
                                                Editar
                                            </a>
                                            <form action="{{ route('selectors.destroy', $selector->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                        
                                                <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Excluir Selecionador" onclick="return confirm('Tem certeza que deseja excluir este selecionador?')">
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Nenhum selecionador encontrado.</td>
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
