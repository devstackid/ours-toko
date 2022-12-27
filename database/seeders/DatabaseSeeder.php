<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Catalogue;
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
        Category::create([
            'nama_kategori' => 'Pria',
            'slug' => 'pria',
        ]);

        Category::create([
            'nama_kategori' => 'Wanita',
            'slug' => 'wanita',
        ]);


        Catalogue::create([
            'nama_katalog' => 'Kemeja',
            'slug' => 'kemeja'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Sepatu',
            'slug' => 'sepatu'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Kemeja Wanita',
            'slug' => 'kemeja-wanita'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Kacamata',
            'slug' => 'kacamata'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Atasan',
            'slug' => 'atasan'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Outer Pria',
            'slug' => 'outer-pria'
        ]);

        Catalogue::create([
            'nama_katalog' => 'Outer Wanita',
            'slug' => 'outer-wanita'
        ]);
    }
}
