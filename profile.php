@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @if (session('message'))
    <div class="alert alert-{{ session('color') }} alert-dismissible" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
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
    </div>
@endsection
