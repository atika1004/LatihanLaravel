@extends('layout.main')

@section('title', 'Daftar Mahasiswa')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">

                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <a href="/students/create" class="btn btn-primary my-3">Tambah data mahasiswa</a>

                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif

                <div class="list-group">
                    @foreach($students as $std)
                    <a href="/students/{{ $std->id }}" class="list-group-item list-group-item-action">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $std->nama }}</h5>
                        <small class="text-muted">Detail</small>
                      </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
