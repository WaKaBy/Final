<!-- resources/views/statistika/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Statistikos</h1>
    <a href="/statistika/create">Pridėti naują statistiką</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Žaidėjas</th>
                <th>Rungtynės</th>
                <th>Taškai</th>
                <th>Rezultatyvūs Perdavimai</th>
                <th>Atkovoti Kamuoliai</th>
                <th>Blokavimai</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($statistikos as $statistika)
                <tr>
                    <td>{{ $statistika->id }}</td>
                    <td>{{ $statistika->zaidejas->Vardas }} {{ $statistika->zaidejas->Pavarde }}</td>
                    <td>{{ $statistika->rungtynes->data_ir_laikas }}</td>
                    <td>{{ $statistika->Taskai }}</td>
                    <td>{{ $statistika->rezultatyvus_perdavimai }}</td>
                    <td>{{ $statistika->Atkovoti_kamuoliai }}</td>
                    <td>{{ $statistika->Blokavimai }}</td>
                    <td>
                        <a href="/statistika/{{ $statistika->id }}/edit">Redaguoti</a>
                        <form action="/statistika/{{ $statistika->id }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Ištrinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
