<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TituloController extends Controller
{
    public function MostrarTitulo1958()
    {
        return view('1958');
    }

    public function MostrarTitulo1962()
    {
        return view('1962');
    }

    public function MostrarTitulo1970()
    {
        return view('1970');
    }

    public function MostrarTitulo1994()
    {
        return view('1994');
    }

    public function MostrarTitulo2002()
    {
        return view('2002');
    }

    public function MostrarTitulo2022()
    {
        return view('2022');
    }
}
