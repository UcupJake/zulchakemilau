<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// In DashboardController
use App\Models\Section;
use App\Models\Card;

class DashboardController extends Controller
{
    public function index()
    {
        $sections = Section::with('cards')->get();
        $products = \App\Models\Product::all();
        return view('admin.dashboard', compact('sections', 'products'));
    }
}
