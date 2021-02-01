@extends('layout.main')

@section('title', 'Daftar Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">

                <h1 class="mt-3">Form Ubah data Mahasiswa</h1>

                <form method="post" action="/students/{{ $student->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                        id="nama" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror"
                        id="npm" placeholder="Masukkan NPM" name="npm" value="{{ $student->npm }}">
                        @error('npm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan"
                        placeholder="Tulis Jurusan Anda" name="jurusan" value="{{ $student->jurusan }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email"
                        placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan Ubah Data</button>

                </form>


            </div>
        </div>
    </div>
@endsection
