<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\EnviarRegistroMail;
use App\Services\VendasService;

class VendasDoDiaMailController extends Controller
{
    public function registroEnvioMail()
    { 
        $vendasTotais = VendasService::vendasTotais();

        EnviarRegistroMail::dispatch($vendasTotais);
    }
}
