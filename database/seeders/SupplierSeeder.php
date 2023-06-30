<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'Lojas Mariano Utilitários',
                'created_at' => '2023-06-27 02:22:01',
                'updated_at' => '2023-06-27 02:22:01'
            ],
            [
                'name' => 'RJ Variedades e Brinquedos',
                'created_at' => '2023-06-27 02:25:32',
                'updated_at' => '2023-06-27 02:25:32'
            ],
            [
                'name' => 'Aline Imports',
                'created_at' => '2023-06-27 02:27:17',
                'updated_at' => '2023-06-27 02:27:17'
            ]
        ]);
    }
}
