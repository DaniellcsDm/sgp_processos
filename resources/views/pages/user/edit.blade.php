@extends('layouts.app')

@section('content')
@include('_includes.alerts')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Editar Registro</h3>
                </div>
                <div class="card-body pt-0 pb-2">

                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        @include('pages.user._partials.inputs')
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <a class="btn btn-secondary" href="{{ route('users.index') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Conteúdo específico da página create -->
@endsection
