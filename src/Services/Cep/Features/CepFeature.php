<?php

namespace App\Services\Cep\Features;

use Lucid\Foundation\Feature;
use Illuminate\Http\Request;
use App\Domains\Cep\Job\CepJob;
use App\Domains\Cep\Jobs\CepJob as JobsCepJob;

class CepFeature extends Feature
{

    private $cep;
    public function __construct($cep)
    {
        $this->cep = $cep;
    }

    public function handle(Request $request)
    {
        $teste = $this->run(JobsCepJob::class, [
            'cep' => $this->cep
        ]);


        return 'it is geting data, see de log : '.$teste;
    }
}
