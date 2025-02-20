<?php

namespace App\Support\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRateService
{
    protected $apiKey = '1928ec80881fbdd953e4b7d9';

    public function getRates($baseCurrency = 'USD')
    {
        $url = "https://v6.exchangerate-api.com/v6/{$this->apiKey}/latest/{$baseCurrency}";

        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
