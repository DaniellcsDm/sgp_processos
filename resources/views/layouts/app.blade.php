<!DOCTYPE html>
<html>

<head>
    <title>Meu Projeto Laravel</title>
    <link href="{{ asset('assets/css/argon-dashboard.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts.sidebar')
   
    <div class="main-content position-relative border-radius-lg ps">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>
    <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>

    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/argon-dashboard.min.js') }}"></script>
</body>

</html>
