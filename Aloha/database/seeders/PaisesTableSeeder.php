<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisesTableSeeder extends Seeder
{
    public function run()
    {
        $paises = [
            ['nome' => 'Brasil', 'codigo' => 'BR'],
            ['nome' => 'Paraguai', 'codigo' => 'PY'],
            ['nome' => 'Argentina', 'codigo' => 'AR'],
            // Adicione mais países se desejar
        ];

        foreach ($paises as $pais) {
            Pais::create($pais);
        }
    }
}