<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Local;

class LocaisTableSeeder extends Seeder
{
    public function run()
    {
        $locais = [
            ['nome' => 'Rio de Janeiro', 'descricao' => 'Cidade maravilhosa', 'pais_id' => 1],
            ['nome' => 'Cidade del Leste', 'descricao' => 'Compras Internacionais', 'pais_id' => 2],
            ['nome' => 'Buenos Aires', 'descricao' => 'Capital dos Manitos', 'pais_id' => 3],
            // Adicione mais locais se desejar
        ];

        foreach ($locais as $local) {
            Local::create($local);
        }
    }
}