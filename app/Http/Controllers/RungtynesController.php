<?php

namespace App\Http\Controllers;

use App\Models\Rungtynes;
use Illuminate\Http\Request;

class RungtynesController extends Controller
{
    public function index()
    {
        $rungtynes = Rungtynes::all();
        return view('rungtynes.index', compact('rungtynes'));
    }
}
