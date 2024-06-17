<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistika;
use App\Models\Zaidejas;
use App\Models\Rungtynes;

class StatistikaController extends Controller
{
    public function index()
    {
        $statistikos = Statistika::with('zaidejas', 'rungtynes')->get();
        return view('statistika.index', compact('statistikos'));
    }

    public function create()
    {
        $zaidejai = Zaidejas::all();
        $rungtynes = Rungtynes::all();
        return view('statistika.create', compact('zaidejai', 'rungtynes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'zaidejas_id' => 'required|exists:zaidejai,id',
            'rungtynes_id' => 'required|exists:rungtynes,id',
            'Taskai' => 'required|integer',
            'rezultatyvus_perdavimai' => 'required|integer',
            'Atkovoti_kamuoliai' => 'required|integer',
            'Blokavimai' => 'required|integer',
        ]);

        Statistika::create($validatedData);

        return redirect('/statistika')->with('success', 'Statistika sėkmingai pridėta!');
    }

    public function edit($id)
    {
        $statistika = Statistika::findOrFail($id);
        $zaidejai = Zaidejas::all();
        $rungtynes = Rungtynes::all();
        return view('statistika.edit', compact('statistika', 'zaidejai', 'rungtynes'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'zaidejas_id' => 'required|exists:zaidejai,id',
            'rungtynes_id' => 'required|exists:rungtynes,id',
            'Taskai' => 'required|integer',
            'rezultatyvus_perdavimai' => 'required|integer',
            'Atkovoti_kamuoliai' => 'required|integer',
            'Blokavimai' => 'required|integer',
        ]);

        Statistika::whereId($id)->update($validatedData);

        return redirect('/statistika')->with('success', 'Statistika sėkmingai atnaujinta!');
    }

    public function destroy($id)
    {
        Statistika::whereId($id)->delete();
        return redirect('/statistika')->with('success', 'Statistika sėkmingai ištrinta!');
    }
}
