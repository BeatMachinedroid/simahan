<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '0895705206794',
            'role' => 'admin',
            'alamat' => 'kedaton',
        ]);

        \App\Models\User::create([
            'username' => 'pelanggan',
            'email' => 'pelanggan@gmail.com',
            'password' => bcrypt('12345678'),
            'no_telp' => '0895705206794',
            'role' => 'pelanggan',
            'alamat' => 'kedaton',
        ]);
    }
}
