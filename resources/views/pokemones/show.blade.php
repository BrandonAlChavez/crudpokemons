@extends('layouts.layout')

@section('content')
<div class="bg-white bg-opacity-70 p-6 rounded-xl shadow-xl max-w-lg mx-auto">

    <h1 class="text-4xl font-bold text-center mb-6">Pokémon #{{ $pokemon->id }}</h1>

    <div class="space-y-3 text-lg">
        <p><strong>Nombre:</strong> {{ $pokemon->nombre }}</p>
        <p><strong>Tipo:</strong> {{ $pokemon->tipo }}</p>
        <p><strong>Ataque:</strong> {{ $pokemon->ataque }}</p>
        <p><strong>Defensa:</strong> {{ $pokemon->defensa }}</p>
    </div>

    <a href="{{ route('pokemones.index') }}" 
       class="block mt-6 text-center poke-blue text-white py-2 rounded-lg hover:bg-blue-600 transition">
       Regresar
    </a>

</div>
@endsection
