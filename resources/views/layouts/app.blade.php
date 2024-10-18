<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <style>
     /* Umum untuk halaman */
     body {
        font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color:#f9c7ce; /* Latar belakang pink lembut */
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #f48fb1;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #f48fb1;
        }
        h2, h1 {
            text-align: center;
            margin-bottom: 20px; 
        }

        /* Tabel */
        table {
            width: 100%;
            max-width: 1000px;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fde3e3
        }

        th, td {
            padding: 20px 35px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead th {
            background-color: #d81b60;
            color: white;
            font-weight: bold;
        }

        tbody tr:hover {
            background-color:   #ffffff;
        }

        .table-hover tbody tr:hover td {
            background-color:  #aec1d3;
        }

        /* Gaya gambar pengguna */
        .foto-user {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        /* Tombol aksi */
        .btn {
            margin: 2px;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            color: white;
            cursor: pointer;
        }

        .btn-add {
            background-color: #007bff;
            
        }

        .btn-add:hover {
            background-color: #0069d9;
        }

        /* Warna tombol aksi */
        .btn-edit {
            background-color: #007bff;
        }

        .btn-edit:hover {
            background-color: #0069d9;
        }

        .btn-detail {
            background-color: #ffc107;
        }

        .btn-detail:hover {
            background-color: #e0a800;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Kontainer dan tata letak */
        .container {
            max-width: 1200px;
            margin: 20px auto;
        }

        .mb-3 {
            margin-bottom: 15px;
        }



    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>