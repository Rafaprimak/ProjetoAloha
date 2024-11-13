<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais; 
use App\Models\Local; // Ensure that the Local model exists in the App\Models namespace


class LocaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        $locais = Local::all();

        return view('locais.index', compact('paises', 'locais'));
    }
}