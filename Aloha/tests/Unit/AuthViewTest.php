<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthViewTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        
        // Configura o driver de cache para 'array'
        config(['cache.default' => 'array']);
        
        // Executa as migrações
        $this->artisan('migrate');
        
        // Popula o banco de dados
        $this->artisan('db:seed', ['--class' => 'DatabaseSeeder']);
    }

    public function test_login_page_loads_successfully()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }

    public function test_login_form_fields_present()
    {
        $response = $this->get(route('login'));
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
    }

    public function test_login_page_contains_registration_link()
    {
        $response = $this->get(route('login'));
        $response->assertSee(route('register'));
    }

    public function test_registration_page_loads_successfully()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200);
    }

    public function test_registration_form_fields_present()
    {
        $response = $this->get(route('register'));
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('name="password_confirmation"', false);
    }

    public function test_registration_validation_errors_displayed()
    {
        $response = $this->post(route('register'), []);
        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }
}