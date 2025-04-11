<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Log;
use App\Services\MailService;

class EnviarCorreoClienteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(MailService $mailService): void
    {
        $data = $this->data;
        try {
            $mailService->envioCorreoAdmin($this->data);
            $mailService->envioCorreoCliente($this->data);
        } catch (\Throwable $th) {
            Log::error('Error al enviar correos: ' . $th->getMessage(), [
                'exception' => $th,
                'data' => $this->data
            ]);
            
            // Reintentar el job más tarde si falla
            $this->release(60); // 60 segundos antes de reintentar
        }
    }
}
