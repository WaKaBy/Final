@extends('layouts.app')

@section('content')
    <h1>Rungtynės</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Data ir Laikas</th>
                <th>Vieta</th>
                <th>Komanda</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rungtynes as $rungtyne)
                <tr>
                    <td>{{ $rungtyne->ID }}</td>
                    <td>{{ $rungtyne->data_ir_laikas }}</td>
                    <td>{{ $rungtyne->vieta }}</td>
                    <td>{{ $rungtyne->komanda->Pavadinimas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
