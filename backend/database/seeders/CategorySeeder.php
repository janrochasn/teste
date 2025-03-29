<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Notebooks'],
            ['name' => 'Tablets'],
            ['name' => 'Gabinetes'],
            ['name' => 'Monitores'],
            ['name' => 'Mouses'],
            ['name' => 'Teclados'],
            ['name' => 'Celulares'],
            ['name' => 'Impressoras'],
            ['name' => 'Cartuchos'],
            ['name' => 'Headphones'],
            ['name' => 'Headsets'],
            ['name' => 'HDs e SSDs'],
            ['name' => 'Cadeiras']
        ]);
    }
}
