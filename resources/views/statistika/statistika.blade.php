<!-- resources/views/statistika.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="mt-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Krepsinio statistika</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Komandų statistika</h2>
                <p>Čia galėtų būti informacija apie komandas, jų rezultatus ir statistiką.</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Žaidėjų statistika</h2>
                <p>Čia galėtų būti informacija apie žaidėjus, jų statistiką, taškų skaičių ir pan.</p>
            </div>
        </div>
    </div>
@endsection
