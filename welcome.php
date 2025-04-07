<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bank-mini</title>
    <link rel="shortcut icon" href="{{ asset('img/1.png') }}" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- dt --}}
    <link rel="stylesheet" href="{{ asset('dt/datatables.min.css') }}">
    <script src="{{ asset('jq/jquery.min.js') }}"></script>
    <script src="{{ asset('dt/datatables.min.js') }}"></script>

    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @font-face {
            font-family: 'Ubuntu';
            src: url('{{ asset('ubuntu/Ubuntu-Regular.ttf') }}') format('truetype');
        }

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        body {
            background: #4723D9;
            color: white;
        }

        @media(max-width:768px) {
            .grs {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Bank - Mini</a>
            <div>
                @php
                    $u_role = auth()->check() ? auth()->user()->role : '';
                @endphp
                @auth
                    <a href="{{ route($u_role . '.dashboard') }}" class="btn btn-outline-warning">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-warning">Log in</a>
                @endauth
            </div>
        </div>
    </nav>

    <section class="text-md-start text-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-6 col-12">
                    <div class="d-flex flex-column">
                        <h1 class="display-2 fw-bold">Transformasi Keuangan Digital</h1>
                        <div class="d-block d-md-flex justify-content-between align-items-center">
                            <p class="fs-2 fw-semibold">di SMKN 10 Jkt
                            </p>
                            <hr class="border-warning-subtle border-3 grs" style="width: 60%;">
                        </div>
                    </div>
                    <p class="lead mt-3">Nikmati kemudahan dalam mengelola saldo, top-up, dan mentransfer dana
                        dengan cepat, efisien, dan tanpa ribet.</p>
                    @auth
                        <a href="{{ route('siswa.dashboard') }}"
                            class="btn btn-outline-warning rounded-pill px-4 py-2 mt-4">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-warning rounded-pill px-4 py-2 mt-4">Sign
                            In</a>
                    @endauth
                </div>
                <div class="col-md-6 col-12 position-relative text-center">
                    <img src="{{ asset('img/1.png') }}" class="img-fluid hero-img">
                    <div class="position-absolute bg-warning"
                        style="height: 50%; width: 60%; top: 20%; right: 10px; border-radius: 100%; z-index: -99;">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
