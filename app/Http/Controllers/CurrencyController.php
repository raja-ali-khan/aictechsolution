<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Services\ExchangeRateService;

class CurrencyController extends Controller
{
    protected $exchangeService;

    public function __construct(ExchangeRateService $exchangeService)
    {
        $this->exchangeService = $exchangeService;
    }

    // Show Exchange Rates Page
    public function showExchangeRates()
    {
        $rates = $this->exchangeService->getRates();

        if (!$rates) {
            return back()->with('error', 'Failed to fetch exchange rates.');
        }

        return view('exchange', ['rates' => $rates]);
    }

    // Convert Currency
    // public function convertCurrency(Request $request)
    // {
    //     $request->validate([
    //         'amount' => 'required|numeric|min:1',
    //         'currency' => 'required|string'
    //     ]);

    //     $rates = $this->exchangeService->getRates();

    //     if (!$rates || !isset($rates['conversion_rates'][$request->currency])) {
    //         return back()->with('error', 'Invalid currency or exchange rate not found.');
    //     }

    //     $convertedAmount = $request->amount * $rates['conversion_rates'][$request->currency];

    //     return back()->with([
    //         'convertedAmount' => number_format($convertedAmount, 2),
    //         'selectedCurrency' => $request->currency,
    //         'enteredAmount' => $request->amount
    //     ]);
    // }
}
