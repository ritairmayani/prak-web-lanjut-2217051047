<?php

namespace Database\Seeders; // Pastikan namespace ini sesuai

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'John Doe',
            'npm' => '123456',
            'kelas_id' => 1, // Pastikan ada kelas dengan id ini di database
            'jurusan' => 'Teknik Informatika',
            'semester' => 5,
        ]);
    }
}
