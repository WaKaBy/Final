<!-- resources/views/statistika/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Pridėti Statistiką</h1>

    <form method="POST" action="/statistika">
        @csrf
        <div>
            <label for="zaidejas_id">Žaidėjas:</label>
            <select name="zaidejas_id" id="zaidejas_id">
                @foreach($zaidejai as $zaidejas)
                    <option value="{{ $zaidejas->id }}">{{ $zaidejas->Vardas }} {{ $zaidejas->Pavarde }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="rungtynes_id">Rungtynės:</label>
            <select name="rungtynes_id" id="rungtynes_id">
                @foreach($rungtynes as $rungtyne)
                    <option value="{{ $rungtyne->id }}">{{ $rungtyne->data_ir_laikas }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="Taskai">Taškai:</label>
            <input type="number" name="Taskai" id="Taskai" required>
        </div>

        <div>
            <label for="rezultatyvus_perdavimai">Rezultatyvūs Perdavimai:</label>
            <input type="number" name="rezultatyvus_perdavimai" id="rezultatyvus_perdavimai" required>
        </div>

        <div>
            <label for="Atkovoti_kamuoliai">Atkovoti Kamuoliai:</label>
            <input type="number" name="Atkovoti_kamuoliai" id="Atkovoti_kamuoliai" required>
        </div>

        <div>
            <label for="Blokavimai">Blokavimai:</label>
            <input type="number" name="Blokavimai" id="Blokavimai" required>
        </div>

        <button type="submit">Pridėti</button>
    </form>
@endsection
