@extends('layouts.app')

@section('content')
    <h1>Komandos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
                <th>Miestas</th>
                <th>Įkūrimo Metai</th>
                <th>Žaidėjai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($komandos as $komanda)
                <tr>
                    <td>{{ $komanda->ID }}</td>
                    <td>{{ $komanda->Pavadinimas }}</td>
                    <td>{{ $komanda->Miestas }}</td>
                    <td>{{ $komanda->Ikurmio_metai }}</td>
                    <td>
                        <ul>
                            @foreach($komanda->zaidejai as $zaidejas)
                                <li>{{ $zaidejas->Vardas }} {{ $zaidejas->Pavarde }} - Aukštis: {{ $zaidejas->Aukstis }} cm, Svoris: {{ $zaidejas->Svoris }} kg</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
