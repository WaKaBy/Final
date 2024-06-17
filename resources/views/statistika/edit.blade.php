<!-- resources/views/statistika/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Redaguoti Statistiką</h1>

    <form method="POST" action="/statistika/{{ $statistika->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="zaidejas_id">Žaidėjas:</label>
            <select name="zaidejas_id" id="zaidejas_id">
                @foreach($zaidejai as $zaidejas)
                    <option value="{{ $zaidejas->id }}" {{ $zaidejas->id == $statistika->zaidejas_id ? 'selected' : '' }}>
                        {{ $zaidejas->Vardas }} {{ $zaidejas->Pavarde }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="rungtynes_id">Rungtynės:</label>
            <select name="rungtynes_id" id="rungtynes_id">
                @foreach($rungtynes as $rungtyne)
                    <option value="{{ $rungtyne->id }}" {{ $rungtyne->id == $statistika->rungtynes_id ? 'selected' : '' }}>
                        {{ $rungtyne->data_ir_laikas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="Taskai">Taškai:</label>
            <input type="number" name="Taskai" id="Taskai" value="{{ $statistika->Taskai }}" required>
        </div>

        <div>
            <label for="rezultatyvus_perdavimai">Rezultatyvūs Perdavimai:</label>
            <input type="number" name="rezultatyvus_perdavimai" id="rezultatyvus_perdavimai" value="{{ $statistika->rezultatyvus_perdavimai }}" required>
        </div>

        <div>
            <label for="Atkovoti_kamuoliai">Atkovoti Kamuoliai:</label>
            <input type="number" name="Atkovoti_kamuoliai" id="Atkovoti_kamuoliai" value="{{ $statistika->Atkovoti_kamuoliai }}" required>
        </div>

        <div>
            <label for="Blokavimai">Blokavimai:</label>
            <input type="number" name="Blokavimai" id="Blokavimai" value="{{ $statistika->Blokavimai }}" required>
        </div>

        <button type="submit">Atnaujinti</button>
    </form>
@endsection
