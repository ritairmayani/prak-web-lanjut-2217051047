@extends ('layouts.app')

@section ('content')


<div class="container text-center">
    <h1 class="text-center">List Data</h1> 
    <div class="add-btn-container">
        <a href="{{ route('user.create') }}" class="btn btn-add">Tambah Pengguna Baru</a>
    </div>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nama'] }}</td>
                <td>{{ $user['npm'] }}</td>
                <td>{{ $user['nama_kelas'] }}</td>
                <td>
                    <img src="{{ asset('img/' . $user->foto) }}" alt="Foto User" class="foto-user">
                </td>
                <td>
                    <a href="{{ route('user.edit', $user['id']) }}" class="btn btn-edit btn-sm">Edit</a>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-detail btn-sm">View</a>
                    <button class="btn btn-delete btn-sm" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus user ini?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">Delete</button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user['id']) }}" method="POST" style="display:none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection