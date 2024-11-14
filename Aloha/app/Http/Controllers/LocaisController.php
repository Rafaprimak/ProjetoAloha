<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais; 
use App\Models\Local;

class LocaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        return view('locais.index', compact('paises'));
    }

    /**
     * Mostra os locais de um país específico.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\View\View
     */
    public function show(Pais $pais)
    {
        $locais = $pais->locais; // Fetch locais related to the selected país
        return view('locais.show', compact('pais', 'locais'));
    }
}