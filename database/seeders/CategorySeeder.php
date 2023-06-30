<?php

namespace Database\Seeders;

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
            [
                'name' => 'Brinquedos',
                'created_at' => '2023-06-27 02:10:10',
                'updated_at' => '2023-06-27 02:10:10'
            ],
            [
                'name' => 'Utilitários',
                'created_at' => '2023-06-27 02:12:02',
                'updated_at' => '2023-06-27 02:12:02'
            ],
            [
                'name' => 'Eletrônicos',
                'created_at' => '2023-06-27 02:15:19',
                'updated_at' => '2023-06-27 02:15:19'
            ]
        ]);
    }
}
