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

    protected $dias_no_mes = date("t");
    protected $mes_atual   = date("m");
    protected $ano_atual   = date("Y");

    public function gerarEscala()
    {
        return view('escala.gerarEscala')->with('dias_da_semana', $this->dias_da_semana);
    }

    private function manipulacaoDatas()
    {
        for($dia = 1; $dia <= $this->dias_no_mes; $dia++)
        {
            $timestamp = mktime(0, 0, 0, $this->mes_atual, $dia, $this->ano_atual);
            $semana    = date("N", $timestamp);

            //echo $semana;

            //exit;
            // echo $semana . '<br>';
            //if($semana < 6) $uteis++;
            if ($semana > 0 && $semana < 6)
            {
                echo '<div style="background-color:black">' . '<strong style="color:#FFFFFF">' . $dias_da_semana[date("w", $timestamp)] . '</strong>' . '</div>';
            }
            else
            {
                echo '<div style="background-color:red">' . '<strong style="color:#FFFFFF">' . $dias_da_semana[date("w", $timestamp)] . '</strong>' . '</div>';
            }
        }
    }
}
