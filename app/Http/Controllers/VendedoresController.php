<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVendedorRequest;
use App\Models\Vendedor;
use App\Services\VendedoresService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public $vendedor;
    public $request;

    public function __construct(Vendedor $vendedor, Request $request)
    {   
        $this->vendedor = $vendedor;
        $this->request = $request;
    }

    public function index(): JsonResponse
    {
        $vendedores = $this->vendedor->all();

        return response()->json(['vendedores' => $vendedores]);
    }

    public function create(CreateVendedorRequest $request): JsonResponse
    {
        $data = $request->only(['nome', 'email']);

        $vendedor = $this->vendedor->create($data);

        $response = [
            'error' => '',
            'vendedor' => $vendedor
        ];

        return response()->json(['data' => $response]);
    }

    public function showAllSellerSales()
    {
        $vendedor = $this->vendedor->find($this->request->id);

        if ($vendedor == null) {
            return response()->json([
                'data' => 'O vendedor com o Id '. $this->request->id.' nao existe!'
            ]);
        }

        $comissao = $this->comissaoVenda($this->request->id);

        $this->updateComissaoVendedor($this->request->id, $comissao);

        $response = [
            'vendedor_id' => $vendedor->id,
            'nome' => $vendedor->nome,
            'email' => $vendedor->email,
            'comissao' => $comissao,
            'vendas' => $vendedor->vendas
        ];

        return $response;
    }

    public function comissaoVenda()
    {
        return VendedoresService::comissaoVenda($this->request->id);
    }

    public function updateComissaoVendedor($id, $comissao)
    {
        $vendedor = $this->vendedor->find($id);

        $vendedor->update(['comissao' => $comissao]);
        $vendedor->save();
    }
}
