<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input::placeholder {
            color: #aaa;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            button {
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"><br>

        <label for="npm">NPM : </label>
        <input type="text" id="npm" name="npm" placeholder="Masukkan NPM"><br>

        <label for="kelas">Kelas :</label>
        <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas"><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
