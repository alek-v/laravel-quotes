<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class QuoteController extends Controller
{
    /**
     * Show all quotes
     */
    public function index()
    {
        return view('index', [
            'quotes' => Quote::all()
        ]);
    }

    /**
     * Show specific quote
     */
    public function show(Quote $quote)
    {
        return view('quotes/quote', [
            'quote' => $quote
        ]);
    }
}
