@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Processos</h3>
                    <a href="{{ route('processes.create') }}" class="btn btn-primary btn-sm float-right">Cadastrar Processo</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Parte Ativa
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Parte Passiva
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Número do Processo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Data de Autuação
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Órgão Julgador
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Juiz
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Classe da Ação
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Assuntos
                                    </th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{dd($processes)}}
                                @forelse ($processes as $process)
                                    <tr>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->activeParty->full_name }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->passiveParty->full_name }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->number }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->autuation_date }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->court }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->judge }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">{{ $process->action_class }}</h6>
                                        </td>
                                        <td class="text-center">
                                            <h6 class="mb-0 text-sm">
                                                @foreach (json_decode($process->subjects) as $subject)
                                                    {{ $subject->description }}@if (!$loop->last), @endif
                                                @endforeach
                                            </h6>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('processes.edit', $process->id) }}" class="btn btn-warning btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Editar Processo">
                                                Editar
                                            </a>
                                            <form action="{{ route('processes.destroy', $process->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                        
                                                <button type="submit" class="btn btn-danger btn-sm text-white text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Excluir Processo" onclick="return confirm('Tem certeza que deseja excluir este processo?')">
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Nenhum processo encontrado.</td>
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
