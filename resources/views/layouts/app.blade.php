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
        body {
    background-color: #f7d3e0; /* Softer pink background */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Modern font style */
}
table {
            width: 80%;
            border-collapse: collapse; /* Menggabungkan border tabel dan cell */
            margin: 20px auto; /* Pusatkan tabel */
            background-color: #fdeef4; /* Warna latar belakang tabel */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan di sekitar tabel */
            border: 1px solid #000; /* Garis di sekitar tabel */
        }

th, td {
    padding: 15px 20px; /* Enhanced cell padding */
    text-align: left; /* Text alignment */
    border-bottom: 2px solid #f2a6d0; /* Bottom border for cells */
}
th {
    background-color: #f78da7; /* Header background color */
    color: white; /* Header text color */
    font-size: 1.2em; /* Larger font size for header */
    letter-spacing: 1px; /* Spacing between letters */
}
tr:nth-child(even) {
    background-color: #f9e4f0; /* Light background for even rows */
}
tr:hover {
    background-color: #f5a6c4; /* Row hover color */
    transition: background-color 0.3s ease; /* Smooth transition */
}
caption {
    font-size: 1.5em; /* Caption font size */
    margin: 10px; /* Margin around caption */
    color: #d54e6d; /* Caption text color */
}
@media (max-width: 768px) {
    table {
        width: 90%; /* Responsive design for smaller screens */
    }
    th, td {
        padding: 10px; /* Adjust padding for smaller screens */
        font-size: 0.9em; /* Smaller font size */
    }
}
    </style>
</head>
<body>
    @yield('content')
    <script src="..."></script>
    
</body>
</html>