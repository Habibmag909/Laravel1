@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h1 class="h3 mb-0">Detail Mahasiswa</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <p class="mb-1"><strong>Nama:</strong></p>
                <p class="lead">{{ $mahasiswa->nama }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <p class="mb-1"><strong>NIM:</strong></p>
                <p class="lead">{{ $mahasiswa->nim }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <p class="mb-1"><strong>Jurusan:</strong></p>
                <p class="lead">{{ $mahasiswa->jurusan }}</p>
            </div>
            <hr>
            <div class="mb-3">
                <p class="mb-1"><strong>Email:</strong></p>
                <p class="lead">{{ $mahasiswa->email }}</p>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection