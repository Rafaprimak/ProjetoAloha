<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeBladeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }

    /**
     * Test that the navigation bar contains 'Home' and 'Locais' links.
     */
    public function test_navigation_links_present()
    {
        $view = View::make('welcome');
        $content = $view->render();

        $this->assertStringContainsString('href="' . route('public.home') . '"', $content);
        $this->assertStringContainsString('Home', $content);
        $this->assertStringContainsString('Locais', $content);
    }


    /**
     * Test that the admin dashboard link is not visible to non-admin users.
     */
    public function test_admin_dashboard_link_not_visible_to_non_admin()
    {
        $user = \App\Models\User::factory()->create(['is_admin' => false])->firstOrFail();

        $view = View::make('welcome');
        $content = $view->render();

        $this->assertStringNotContainsString('Dashboard de Administrador', $content);
    }

    /**
     * Test that the carousel contains the correct number of items.
     */
    public function test_carousel_contains_correct_number_of_items()
    {
        $view = View::make('welcome');
        $content = $view->render();

        // Assuming there are 2 carousel-item divs
        $carouselItemCount = substr_count($content, 'class="carousel-item');
        $this->assertEquals(2, $carouselItemCount);
    }

    /**
     * Test that the newsletter subscription form is present.
     */
    public function test_newsletter_subscription_form_present()
    {
        $view = View::make('welcome');
        $content = $view->render();

        $this->assertStringContainsString('<form method="POST" action="">', $content);
        $this->assertStringContainsString('name="email"', $content);
        $this->assertStringContainsString('name="name"', $content);
    }

    /**
     * Test that the footer contains all required sections.
     */
    public function test_footer_contains_required_sections()
    {
        $view = View::make('welcome');
        $content = $view->render();

        $this->assertStringContainsString('Aloha Turismo', $content);
        $this->assertStringContainsString('Central de Atendimento', $content);
        $this->assertStringContainsString('Termos', $content);
    }

    /**
     * Test that the Google Maps iframe is present with the correct src.
     */
    public function test_google_maps_iframe_present()
    {
        $view = View::make('welcome');
        $content = $view->render();

        $expectedSrc = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.356497418815!2d-51.479116223735495!3d-25.359365930102413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ef37e5f0d42345%3A0x1c341796f1339403!2sALOHA%20TRANSPORTES%20E%20TURISMO.!5e0!3m2!1spt-BR!2sbr!4v1731346336937!5m2!1spt-BR!2sbr';
        $this->assertStringContainsString('iframe src="' . $expectedSrc . '"', $content);
    }
}