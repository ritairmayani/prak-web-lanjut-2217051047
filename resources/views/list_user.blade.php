@extends('layouts.app')
@section ('content')

<div>
    <div class="mb-3 mt-2 m-3">
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah User</a>
    </div>

    <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 1rem;">
        @foreach ($users as $user)
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;" src="{{ asset('upload/img/' . $user->foto) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $user->nama }}</strong></h5>
                    <p class="card-text">
                        NPM: {{ $user->npm }}<br>
                        Kelas: {{ $user->nama_kelas }}<br>
                        Jurusan: {{ $user->jurusan }}<br>
                        Semester: {{ $user->semester }}
                    </p>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection