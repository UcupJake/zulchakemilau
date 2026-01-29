<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        return view('contact');
    }
}
