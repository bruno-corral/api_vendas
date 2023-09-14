<?php

namespace App\Jobs;

use App\Mail\RegistroEnvioMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EnviarRegistroMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $vendasTotais;

    /**
     * Create a new job instance.
     */
    public function __construct($vendasTotais)
    {
        $this->vendasTotais = $vendasTotais;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $registroEnvioMail = new RegistroEnvioMail($this->vendasTotais);

        Mail::to('brunoalcorral@gmail.com')
            ->send($registroEnvioMail);
    }
}
