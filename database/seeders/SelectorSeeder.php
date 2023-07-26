<?php

namespace Database\Seeders;

use App\Models\Selector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SelectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Selector::create([
            'category' => 'Categoria 1',
            'subcategory' => 'Subcategoria 1',
            'external_code' => 'COD001',
            'description' => 'Descrição do Selecionador 1',
            'primary' => true,
        ]);

        Selector::create([
            'category' => 'Categoria 1',
            'subcategory' => 'Subcategoria 2',
            'external_code' => 'COD002',
            'description' => 'Descrição do Selecionador 2',
            'primary' => false,
        ]);
    }
}
