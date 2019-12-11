<?php

namespace App\Domains\Cep\Jobs;

use Illuminate\Support\Facades\Log;
use Lucid\Foundation\QueueableJob;
use GuzzleHttp\Client;

class CepJob extends QueueableJob
{
    private $cep;
    /**
     * Create a new job instance.
     *
     * @return void
      */
    public function __construct($cep = '')
    {
        Log::info('construct');
        $this->cep = $cep;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('handle');
        $this->invokeAPI();
        return 'This return don\'t work because it is async';
    }

    private function invokeAPI()
    {
        for ($i = 0; $i< 10; $i++) {
            $client = new Client();
            $res = $client->request('GET', "https://viacep.com.br/ws/$this->cep/json/");
            Log::info('STATUS -> '.$res->getStatusCode()
                  .'CONTENT_TYPE -> '.$res->getHeader('content-type')[0]
                  .'BODY -> '.$res->getBody());
        }
    }
}
