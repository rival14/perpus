<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Carbon\Carbon;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Valdano Esnaidar",
            'username' => 'dano',
            'jKelamin' => 'laki-laki',
            'alamat' => 'Perumahan Pesona Gading 2 Blok Ab11 No 2 A Kabputan Bekasi Kecamatan Cibitung Kelurahan Wanajaya',
            'telp' => '089691029906',
            'tLahir' => Carbon::parse('1998-04-04'),
            "email" => "valdanoesnaidar@gmail.com",
            "password" => bcrypt("12345"),
            'roles' => 'admin',
        ]);

        User::create([
            "name" => "Muhamad Rival",
            'username' => 'rival',
            'jKelamin' => 'laki-laki',
            'alamat' => 'Bekasi Pondok Ungu',
            'telp' => '089691029905',
            'tLahir' => Carbon::parse('2000-03-04'),
            "email" => "rival@gmail.com",
            "password" => bcrypt("12345"),
        ]);

        Kategori::create([
            "name" => "Komik",
            'slug' => 'komik',
        ]);

        Kategori::create([
            "name" => "Novel",
            'slug' => 'novel',
        ]);

        Buku::create([
            "kategoris_id" => 1,
            "judul" => "Naruto",
            'slug' => 'naruto',
            'genre' => 'fantasy',
            'stock' => 40,
            'alamat' => 'A1',
            'penerbit' => 'Shounen Jump',
            'pengarang' => 'Musashi',
            'tPenerbit'=> '1998'
        ]);

        Buku::create([
            "kategoris_id" => 1,
            "judul" => "One Piece",
            'slug' => 'one-piece',
            'genre' => 'fantasy',
            'stock' => 45,
            'alamat' => 'A1',
            'penerbit' => 'Shounen Jump',
            'pengarang' => 'Musashi2',
            'tPenerbit'=> '1999'
        ]);


    }


}
