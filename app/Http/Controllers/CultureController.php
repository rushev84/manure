<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();
        return view('cultures', compact('cultures'));
    }
}
