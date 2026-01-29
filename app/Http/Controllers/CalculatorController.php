<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        return view('calculator');
    }
}
