<?php

use App\Http\Controllers\Mails\VendasDoDiaMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('envio-email', [VendasDoDiaMailController::class, 'registroEnvioMail']);
