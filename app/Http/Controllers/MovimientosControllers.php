<?php

namespace App\Http\Controllers;

use App\Enums\Movimientos;
use App\Http\Requests\MovimientosRequest;
use App\Models\Movement;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class MovimientosControllers extends Controller
{

    public function index()
    {
        $numArray = random_int(Movimientos::MIN, Movimientos::MAX);
        $arrayMovimientos = [];
        for ($i = 0; $i < $numArray; $i++) {
            $arrayMovimientos[] = $this->getMovimiento();
        }
        return $arrayMovimientos;
    }
    public function getMovimiento()
    {
        $listaMovimientos = [ucfirst(Movimientos::RIGHT), ucfirst(Movimientos::LEFT), ucfirst(Movimientos::DOWN)];
        $index = array_rand($listaMovimientos);
        return $listaMovimientos[$index];
    }
    public function storeMovimientos(MovimientosRequest $request)
    {
        if (!empty($request)) {

            Movement::create([
                'coordenadas' => $request->coordenadas
            ]);

            return response()->json([
                'res' => true,
                'message' => 'se ha guardado correctamente'
            ], 200);
        }
    }
}
