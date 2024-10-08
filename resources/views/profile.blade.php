<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f9c7ce; /* Warna background pink muda */
    }

    .profile-container {
        text-align: left;
        background-color: #ffebee; /* Warna background kontainer */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        width: 250px;
    }

    .profile-picture {
        margin-bottom: 20px;
    }

    .profile-picture img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid #f9c7ce; /* Border warna pink muda */
        display: block;
        margin: 0 auto;
    }

    .profile-info {
        display: flex;
        flex-direction: column;
    }

    .info-item {
        background-color: #f48fb1; /* Warna pink lebih tua untuk info-item */
        color: #ffffff;
        padding: 10px 15px;
        border-radius: 5px;
        font-weight: bold;
        text-align: left;
        margin: 5px 0; 
    }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-picture">
        <img src="{{ asset('img/' . $user->foto) }}" alt="Profile Picture" />
    </div>

    <div class="profile-info">
        <div class="info-item">Nama : {{ $user->nama }}</div>
        <div class="info-item">NPM : {{ $user->npm }}</div>
        <div class="info-item">Kelas : {{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</div>
    </div>
</div>

</body>
</html>
