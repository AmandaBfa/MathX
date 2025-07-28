<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'apresentar a pagina incial';
    }

    public function generateExercises(Request $request)
    {
        echo 'gerar exercícios';
    }

    public function printExercises()
    {
        echo 'imprimir exercícios no navegador';
    }

    public function exportExercises()
    {
        echo 'exportar exercícios para um arquivo de teste';
    }
}
