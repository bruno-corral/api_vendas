<?php

namespace App\Services;

use App\Models\Venda;

class VendasService {

    public static function vendasTotais()
    {
        $vendas = Venda::query()
            ->sum('valor_venda');

        return $vendas;
    }
}