<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8bbd0; /* Latar belakang pink lembut */
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #f48fb1; /* Warna pink menarik untuk input */
            background-color: #fce4ec; /* Latar belakang input pink lembut */
            border-radius: 5px;
            color: #880e4f; /* Warna teks untuk kontras */
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #e91e63; /* Warna pink terang untuk tombol */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }

        .form-container button:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('user.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="">
            @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>

            @endforeach
            
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" value="">
            @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>

            @endforeach
            
            <label for="kelas_id">Kelas:</label>
            <select name="kelas_id" id="kelas_id" required>
                @foreach($kelas as $kelasItem)
                <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                @endforeach
    </select>
    @foreach($errors->get('kelas_id') as $msg)
            <p class="text-danger">{{ $msg }}</p>

            @endforeach
            
            <button type="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>
</html>
