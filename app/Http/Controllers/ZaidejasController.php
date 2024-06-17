<?php

namespace App\Http\Controllers;

use App\Models\Zaidejas;
use Illuminate\Http\Request;

class ZaidejasController extends Controller
{
    public function index()
    {
        $zaidejai = Zaidejas::all();
        return view('zaidejai.index', compact('zaidejai'));
    }
}
