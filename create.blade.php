@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h1 class="h3 mb-0">Tambah Mahasiswa Baru</h1>
        </div>
        <div class="card-body">
            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}" required>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM:</label>
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM" value="{{ old('nim') }}" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan:</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="{{ old('jurusan') }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection