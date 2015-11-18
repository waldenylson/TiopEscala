<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EscalaController extends Controller
{
    protected $dias_da_semana =
    array(
        0 => 'Domingo',
        1 => 'Segunda-Feira',
        2 => 'Terça-Feira',
        3 => 'Quarta-Feira',
        4 => 'Quinta-Feira',
        5 => 'Sexta-Feira',
        6 => 'Sábado'
    );

    public function gerarEscala()
    {
        return view(escala.gerarEscala)->with("dias_da_semana", compact($this->dias_da_semana));
    }
}
