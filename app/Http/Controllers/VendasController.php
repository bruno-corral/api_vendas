<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVendasRequest;
use App\Models\Venda;
use Illuminate\Http\JsonResponse;

class VendasController extends Controller
{
    public $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function index(): JsonResponse
    {
        $venda = $this->venda->all();

        return response()->json(['venda' => $venda]);
    }

    public function create(CreateVendasRequest $request): JsonResponse
    {
        $data = $request->only(['valor_venda', 'vendedor_id']);

        $venda = $this->venda->create($data);

        $response = [
            'error' => '',
            'venda' => $venda
        ];

        return response()->json(['data' => $response]);
    }
}
