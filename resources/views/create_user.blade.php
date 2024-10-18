@extends('layouts.app')

@section('content')

<div>
    <div class="container text-center">
        <h1 class="text-center">Input Data</h1>
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama"><br>
 
        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM"><br>
        
        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>
        <label for="foto" class="form-label">Foto</label>
        <input class="form-control" type="file" id="foto" name="foto">
        <button type="submit">Submit</button>
    </form>
</div>
@endsection