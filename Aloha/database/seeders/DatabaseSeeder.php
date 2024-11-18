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
                'descricao' => 'Com belas praias, montanhas espetaculares e a trilha sonora de samba e bossa nova, o Rio de Janeiro encanta os visitantes. A famosa praia de Ipanema continua sendo o lugar perfeito para caminhar, pegar um bronzeado e desfilar. A maior estátua art déco do mundo, o Cristo Redentor, convida todos a uma visita ao Corcovado. Além disso, o Rio é lar de museus de ciência e arte, uma cena gastronômica badalada, um enorme estádio de futebol, vida noturna incrível e cerca de 80 km de praias. Se você visitar no Carnaval, as comemorações anuais no Rio são repletas de música, dança, carros alegóricos, fantasias, comida e bebida, que dão vida a uma festa sem fim.',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 2,
                'nome' => 'Cidade del Leste',
                'descricao' => 'Quando se fala em turismo no Paraguai (ou República do Paraguai), na América do Sul, o primeiro pensamento dos brasileiros é o turismo voltado para compras em Ciudad del Este. Embora esse seja um forte atrativo do país, o Paraguai tem mais a oferecer para quem o visita.

                O país possui belas paisagens, muita história, além de uma gastronomia rica e bem diferente do que estamos acostumados aqui no Brasil. E com a vantagem de estar pertinho do Brasil sendo, assim como em outros países da América do Sul, um belo incentivo para a visita.

                O Paraguai, assim como a Bolívia, não tem acesso ao mar. Fica na parte sul do continente limitado pelo Brasil, pela Argentina e pela própria Bolívia. Um dos menores países da América do Sul, tem aproximadamente 406,7 mil km², sendo um pouco maior que o estado brasileiro de Mato Grosso do Sul.',
                'pais_id' => 2,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 3,
                'nome' => 'Buenos Aires',
                'descricao' => 'Buenos Aires tem uma energia impossível de ignorar. A cidade oferece comidas e bebidas como Malbec e carnes incrivelmente boas, além de fazer você virar a noite em boates e salões de dança. Mas há também um lado discreto que vale a pena conhecer. Caminhe pelas ruas de paralelepípedos dos bairros pela manhã para conferir a arquitetura neoclássica no ritmo que preferir. É claro que Palermo conta com restaurantes e lojas badaladas, mas comer um choripán em um piquenique descontraído nos Bosques de Palermo tem seu charme. Visite San Telmo para conhecer a Feria de San Telmo, uma enorme feira de rua todos os domingos, e apreciar um pouco de tango (assista a um show pago ou confira uma apresentação ao ar livre na Plaza Dorrego). Se quiser uma atividade mais calma, visite um museu de arte ou galeria e mate a fome em uma barraca no Mercado de San Telmo. Siga um ritmo rápido ou devagar: a escolha é sua.',
                'pais_id' => 3,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 4,
                'nome' => 'São Paulo',
                'descricao' => 'A culinária e a arte de São Paulo, a maior cidade da América do Sul, é tão multinacional quanto sua diversificada população de mais de 11 milhões de habitantes. Com os restaurantes do bairro Jardins servindo todos os tipos imagináveis de pratos, e lanchonetes do mundo inteiro, não seria estranho você ir a São Paulo só para comer. Mas você perderia museus de nível internacional, excursões pelos diferentes e animados bairros, além de ótimas compras.',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 5,
                'nome' => 'Natal',
                'descricao' => 'Portal para as deslumbrantes praias do Rio Grande do Norte, a cidade de Natal fica no alto da costa atlântica do Brasil, na foz do Rio Potengi. Fuja do agito nas praias escondidas de Pipa e Pirangi ou corra para o agito de Genipabu e Tibau do Sul. A cidade é cercada pelo Parque Estadual das Dunas. Você pode rodar com um buggy por dunas de areia de mais de 10 metros ou passear de dromedário. A cidade tem o ar mais puro do continente, de acordo com a NASA, e abriga ainda o maior cajueiro do mundo.',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 6,
                'nome' => 'Aparecida do Norte',
                'descricao' => 'A Cidade de Aparecida, conhecida popularmente como Aparecida do Norte, está situada no Vale do Paraíba, interior de São Paulo e é destaque no turismo religioso mundial recebendo mais de 12 milhões de turistas e peregrinos todos os anos. Na cidade encontra-se o Santuário Nacional com a imagem de Nossa Senhora da Conceição Aparecida, encontrada por pescadores no Rio Paraíba do Sul em 1717.',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ],
            [
                'id' => 7,
                'nome' => 'Gramado',
                'descricao' => 'A pequena cidade brasileira de Gramado é um refúgio pitoresco e verdejante que abriga algumas surpresas encantadoras. Depois de se divertir bastante nos pedalinhos e nos bosques de pinheiros da Floresta Negra em torno do Lago Negro, faça uma visita ao Snowland, o único parque de neve Indoor da América Latina. As crianças vão adorar o Mini Mundo, um parque de miniaturas que contém réplicas minúsculas de paisagens conhecidas.',
                'pais_id' => 1,
                'created_at' => '2024-11-14 14:32:39',
                'updated_at' => '2024-11-14 14:32:39',
            ]
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

        // Populando a tabela 'buses'
        DB::table('buses')->insert([
            [
                'name' => 'Ônibus 1',
                'status' => 'Ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ônibus 2',
                'status' => 'Ativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ônibus 3',
                'status' => 'Inativo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ônibus 4',
                'status' => 'Em Manutenção',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}