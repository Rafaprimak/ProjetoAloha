<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Support\Facades\View;

class AppBladeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    // Tests for 'Locais' Views

    public function test_locais_page_loads_successfully()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        $this->assertNotEmpty($content);
    }

    public function test_locais_navigation_links_present()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        $this->assertStringContainsString('href="' . route('public.home') . '"', $content);
        $this->assertStringContainsString('Locais', $content);
    }

    public function test_locais_correct_number_of_items()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        // Assuming there are 5 location items
        $itemCount = substr_count($content, 'class="location-item');
        $this->assertEquals(5, $itemCount);
    }

    public function test_locais_search_form_present()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        $this->assertStringContainsString('<form method="GET" action="' . route('locais.search') . '">', $content);
        $this->assertStringContainsString('name="query"', $content);
    }

    public function test_locais_location_details_present()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        $this->assertStringContainsString('class="location-name"', $content);
        $this->assertStringContainsString('class="location-address"', $content);
    }

    public function test_locais_map_iframe_present()
    {
        $view = View::make('locais.index');
        $content = $view->render();

        $expectedSrc = 'https://www.google.com/maps/embed?...'; // Replace with actual src
        $this->assertStringContainsString('iframe src="' . $expectedSrc . '"', $content);
    }

    // Tests for Login and Registration Views

    public function test_login_page_loads_successfully()
    {
        $view = View::make('auth.login');
        $content = $view->render();

        $this->assertNotEmpty($content);
    }

    public function test_login_form_fields_present()
    {
        $view = View::make('auth.login');
        $content = $view->render();

        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('name="password"', $content);
    }

    public function test_login_page_contains_registration_link()
    {
        $view = View::make('auth.login');
        $content = $view->render();

        $this->assertStringContainsString('href="' . route('register') . '"', $content);
    }

    public function test_registration_page_loads_successfully()
    {
        $view = View::make('auth.register');
        $content = $view->render();

        $this->assertNotEmpty($content);
    }

    public function test_registration_form_fields_present()
    {
        $view = View::make('auth.register');
        $content = $view->render();

        $this->assertStringContainsString('name="name"', $content);
        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('name="password"', $content);
        $this->assertStringContainsString('name="password_confirmation"', $content);
    }

    public function test_registration_validation_errors_displayed()
    {
        $view = View::make('auth.register', ['errors' => session('errors')]);
        $content = $view->render();

        $this->assertStringContainsString('The name field is required.', $content);
        $this->assertStringContainsString('The email field is required.', $content);
        $this->assertStringContainsString('The password field is required.', $content);
    }
}