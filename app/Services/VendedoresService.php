<?php

namespace App\Services;

use App\Models\Venda;

class VendedoresService {

    public static function comissaoVenda($id)
    {
        $comissao = Venda::query()
            ->where(["vendedor_id" => $id])
            ->sum('valor_venda');

        return round($comissao * 0.085, 2);
    }
}