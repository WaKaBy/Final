<?php

namespace App\Http\Controllers;

use App\Models\Komanda;
use Illuminate\Http\Request;

class KomandaController extends Controller
{
    public function index()
    {
        $komandos = Komanda::with('zaidejai')->get();

        // Debug pranešimas
        dd($komandos);

        return view('komandos.index', compact('komandos'));
    }
}
