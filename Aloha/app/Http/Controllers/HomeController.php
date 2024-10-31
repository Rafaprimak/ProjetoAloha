<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    /**
     * Construtor para aplicar middleware de autenticação.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Mostra a página inicial para usuários autenticados.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostra a página inicial para visitantes.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function publicHome()
    {
        return view('welcome'); // Ou a view que desejar para visitantes
    }
}
