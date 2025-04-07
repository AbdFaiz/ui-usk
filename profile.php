<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bank-mini</title>
    <link rel="shortcut icon" href="{{ asset('img/1.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('fa/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bx/css/boxicons.min.css') }}">
    {{-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> --}}

    <style>
        @font-face {
            font-family: 'Ubuntu';
            src: url('{{ asset('Ubuntu/Ubuntu-Regular.ttf') }}') format('truetype');
        }

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        :root {
            --header-height: 3rem;
            --nav-width: 68px;
            --first-color: #4723D9;
            --sec-color: #5B3DD4FF;
            --third-color: #3B82DFFF;
            --fourth-color: #3BCCDFFF;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100;
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
        }

        a {
            text-decoration: none;
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s;
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .header_img {
            width: 35px;
            height: 35px;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .header_img img {
            width: 40px;
        }

        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed);
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem;
        }

        .nav_logo {
            margin-bottom: 2rem;
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color);
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700;
        }

        .nav_link {
            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s;
        }

        .nav_link:hover {
            color: var(--white-color);
        }

        .nav_icon {
            font-size: 1.25rem;
        }

        .showw {
            left: 0;
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem);
        }

        .active {
            color: var(--white-color);
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color);
        }

        .height-100 {
            height: 100vh;
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem);
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
            }

            .header_img {
                width: 40px;
                height: 40px;
            }

            .header_img img {
                width: 45px;
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0;
            }

            .showw {
                width: calc(var(--nav-width) + 156px);
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px);
            }
        }
    </style>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='fas fa-bars' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="/" class="nav_logo"> <i class="fa-brands fa-pied-piper-pp nav_logo-icon"></i> <span
                        class="nav_logo-name">Bank Mini</span> </a>
                <div class="nav_list">
                    @if (auth()->check())
                        @php
                            $u_role = auth()->user()->role;
                        @endphp
                        <a href="{{ route($u_role . '.dashboard') }}"
                            class="nav_link @if (request()->routeIs('siswa.dashboard')) active @endif"> <i
                                class='fas fa-dashboard nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    @endif
                    @if (auth()->check() && auth()->user()->role !== 'siswa')
                        <a href="{{ route('transactions.all') }}"
                            class="nav_link @if (request()->routeIs('transactions.all')) active @endif"> <i
                                class='fas fa-file-invoice nav_icon'></i> <span class="nav_name">Transaksi</span>
                        </a>
                        <a href="{{ route('users.create') }}"
                            class="nav_link @if (request()->routeIs('users.create')) active @endif"> <i
                                class='fas fa-user-plus nav_icon'></i> <span class="nav_name">Pengguna</span>
                        </a>
                    @endif
                    @if (auth()->check() && auth()->user()->role == 'bank')
                        <a href="{{ route('users.index') }}"
                            class="nav_link @if (request()->routeIs('users.index')) active @endif"> <i
                                class='fas fa-user nav_icon'></i> <span class="nav_name">Pengguna</span>
                        </a>
                        <a href="{{ route('adm.topup') }}"
                            class="nav_link @if (request()->routeIs('adm.topup')) active @endif"> <i
                                class='fas fa-money-bill nav_icon'></i> <span class="nav_name">Topup</span> </a>
                        <a href="{{ route('adm.withdraw') }}"
                            class="nav_link @if (request()->routeIs('adm.withdraw')) active @endif"> <i
                                class='fas fa-money-bill-trend-up nav_icon'></i> <span class="nav_name">Withdraw</span>
                        </a>
                    @endif
                    @if (auth()->check() && auth()->user()->role == 'siswa')
                        <a href="{{ route('topup') }}"
                            class="nav_link @if (request()->routeIs('topup')) active @endif"> <i
                                class='fas fa-money-bill nav_icon'></i> <span class="nav_name">Topup</span> </a>
                        <a href="{{ route('withdraw') }}"
                            class="nav_link @if (request()->routeIs('withdraw')) active @endif"> <i
                                class='fas fa-money-bill-trend-up nav_icon'></i> <span class="nav_name">Withdraw</span>
                        </a>
                        <a href="{{ route('transfer') }}"
                            class="nav_link @if (request()->routeIs('transfer')) active @endif"> <i
                                class='fas fa-money-bill-transfer nav_icon'></i> <span class="nav_name">Transfer</span>
                        </a>
                        <a href="{{ route('profile') }}"
                            class="nav_link @if (request()->routeIs('profile')) active @endif"> <i
                                class='fas fa-address-card nav_icon'></i> <span class="nav_name">Profile</span>
                        </a>
                    @endif
                </div>
            </div>
            @guest
                @if (Route::has('login'))
                    <a class="nav_link" href="{{ route('login') }}"><i class='fas fa-right-to-bracket nav_icon'></i> <span
                            class="nav_name">Login</span>
                    </a>
                @endif
            @else
                <a class="nav_link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    <i class='fas fa-right-from-bracket nav_icon'></i> <span class="nav_name">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </nav>
    </div>
    <main class="py-4">
        <div class="container-fluid">
            <div class="card rounded shadow mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="p-3">
                            <h1 class="h4 font-weight-bold text-dark">Haloo {{ ucfirst(auth()->user()->name) }} 👋</h1>
                            <hr class="text-primary w-25">
                            <p class="text-muted">
                                Ini adalah halaman profile anda yang bisa digunakan untuk mengedit dan update informasi
                                identitas anda!
                                Terimakasih
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username', auth()->user()->username) }}" required>
                            @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', auth()->user()->email) }}" required>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
    
                        <hr class="my-4 mx-4 text-danger">
                    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" name="password" class="form-control">
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        const showwNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
                    nav.classList.toggle('showw')
                    toggle.classList.toggle('fa-x')
                    bodypd.classList.toggle('body-pd')
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showwNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))
    });
</script>
</body>

</html>
