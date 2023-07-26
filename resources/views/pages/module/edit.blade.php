@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="text-white"> {{ session('success') }} </span>
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-white">{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header mb-0 d-flex justify-content-between">
                    <h3>Editar Registro</h3>
                </div>
                <div class="card-body px-0 pt-0 pb-2">

                    <form action="{{ route('modules.update', $module->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        @include('pages.module._partials.inputs')
                        <button type="submit" class="btn btn-primary">Editar</button>
                        <a class="btn btn-secondary" href="{{ route('modules.index') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Conteúdo específico da página create -->
@endsection
