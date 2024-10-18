@extends('layouts.app')

@section('content')
<div>
    <div class="container text-center">
        <h1 class="text-center">Edit Data</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" value="{{ old('nama', $user->nama) }}">
 
        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" value="{{ old('npm', $user->npm) }}">
        
        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                {{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control" type="file" id="foto" name="foto">
        @if ($user->foto)
    <img src="{{ asset('img/' . $user->foto) }}" alt="User Photo" width="100">
@endif

        <button type="submit">Submit</button>
    </form>
</div>
@endsection