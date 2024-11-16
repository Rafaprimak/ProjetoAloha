<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Populando a tabela 'cache'
        DB::table('cache')->insert([
            [
                'key' => 'example_key1',
                'value' => 'Example value 1',
                'expiration' => 1633072800,
            ],
            [
                'key' => 'example_key2',
                'value' => 'Example value 2',
                'expiration' => 1633072800,
            ],
            // Adicione mais registros conforme necessário
        ]);

        // Populando a tabela 'cache_locks'
        DB::table('cache_locks')->insert([
            [
                'key' => 'lock_key1',
                'owner' => 'owner1',
                'expiration' => 1633072800,
            ],
            [
                'key' => 'lock_key2',
                'owner' => 'owner2',
                'expiration' => 1633072800,
            ],
            // Adicione mais registros conforme necessário
        ]);

        // **Populando a tabela 'paises' primeiro**
        DB::table('paises')->insert([
            [
                'id' => 1,
                'nome' => 'Brasil',
                'codigo' => 'BR',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'nome' => 'Paraguai',
                'codigo' => 'PY',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'nome' => 'Argentina',
                'codigo' => 'AR',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);

        // Populando a tabela 'locais' depois
        DB::table('locais')->insert([
            [
                'id' => 1,
                'nome' => 'Rio de Janeiro',
                'descricao' => 'Cidade maravilhosa',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 2,
                'nome' => 'Cidade del Leste',
                'descricao' => 'Compras Internacionais',
                'pais_id' => 2,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 3,
                'nome' => 'Buenos Aires',
                'descricao' => 'Capital dos Manitos',
                'pais_id' => 3,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
        ]);

        // Populando a tabela 'migrations'
        DB::table('migrations')->insert([
            [
                'id' => 7,
                'migration' => '0001_01_01_000000_create_users_table',
                'batch' => 1,
            ],
            [
                'id' => 8,
                'migration' => '0001_01_01_000001_create_cache_table',
                'batch' => 1,
            ],
            [
                'id' => 9,
                'migration' => '0001_01_01_000002_create_jobs_table',
                'batch' => 1,
            ],
        ]);

        // Populando a tabela 'password_reset_tokens'
        DB::table('password_reset_tokens')->insert([
            [
                'email' => 'user@example.com',
                'token' => 'example_token_1',
                'created_at' => now(),
            ],
            [
                'email' => 'admin@example.com',
                'token' => 'example_token_2',
                'created_at' => now(),
            ],
            // Adicione mais registros conforme necessário
        ]);

        // Populando a tabela 'sessions'
        DB::table('sessions')->insert([
            [
                'id' => 'qVJdLYdYvWxzQtLQPz1BTrbZWOcKpO32WW2ZFgNg',
                'user_id' => null,
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0',
                'payload' => 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXNFRW8yOHF0MUpRRXlkYmh4NXh4MFlnRzVYV0x0UU1wY2d5UlZ6OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2NhaXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',
                'last_activity' => 1731584616,
            ],
            // Adicione mais registros conforme necessário
        ]);

        // Populando a tabela 'users'
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'is_admin' => true, // Definido como true para administrador
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Usuário',
                'email' => 'user@example.com',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'is_admin' => false, // Definido como false para usuário comum
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Adicione mais registros conforme necessário
        ]);
    }
}