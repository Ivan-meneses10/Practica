<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function suma($numero1, $numero2)
    {
        return $numero1 + $numero2;
    }

    public function multiplicion($numero1, $numero2)
    {
        return $numero1 * $numero2;
    }

    public function esPositivo($numero)
    {
        return $numero > 0;
    }

    public function esNumeroPar($numero)
    {
        return $numero % 2 == 0;
    }

    public function calcularAreaTriangulo($base, $altura)
    {
        return 0.5 * $base * $altura;
    }
}

    
