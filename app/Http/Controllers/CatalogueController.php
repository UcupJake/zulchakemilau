<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index(Request $request)
    {
        return view('catalogue');
    }
}
