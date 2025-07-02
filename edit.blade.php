@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h1 class="h3 mb-0">Edit Data Mahasiswa</h1>
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

            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $mahasiswa->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM:</label>
                    <input type="text" name="nim" class="form-control" id="nim" value="{{ $mahasiswa->nim }}" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan:</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ $mahasiswa->email }}" required>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection