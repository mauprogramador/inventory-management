<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'number' => 427658139910,
                'name' => 'Carrinho de Controle Remoto Sport',
                'total_quantity' => 5,
                'minimum_quantity' => 2,
                'category' => 'Brinquedos',
                'supplier' => 'RJ Variedades e Brinquedos',
                'created_at' => '2023-06-27 02:10:10',
                'updated_at' => '2023-06-27 02:10:10'
            ],
            [
                'number' => 266145731952,
                'name' => 'Mini Processador de Alimentos',
                'total_quantity' => 15,
                'minimum_quantity' => 6,
                'category' => 'Utilitários',
                'supplier' => 'Lojas Mariano Utilitários',
                'created_at' => '2023-06-28 02:10:10',
                'updated_at' => '2023-06-28 02:10:10'
            ],
            [
                'number' => 761432195844,
                'name' => 'Pilha Alcalina Duracell',
                'total_quantity' => 5,
                'minimum_quantity' => 15,
                'category' => 'Eletrônicos',
                'supplier' => 'Aline Imports',
                'created_at' => '2023-06-29 02:10:10',
                'updated_at' => '2023-06-29 02:10:10'
            ]
        ]);
    }
}
