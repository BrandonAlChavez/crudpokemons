@extends('layouts.layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Crear Pokémon</h1>

<form action="{{ route('pokemones.store') }}" method="POST"
      class="bg-white bg-opacity-60 p-6 rounded-xl shadow-xl space-y-4">
    @csrf

    <div>
        <label class="font-bold">Nombre:</label>
        <input type="text" name="nombre"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Tipo:</label>
        <input type="text" name="tipo"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Ataque:</label>
        <input type="number" name="ataque"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Defensa:</label>
        <input type="number" name="defensa"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <button class="poke-blue text-white w-full py-3 rounded-lg hover:bg-blue-600 transition">
        Guardar
    </button>
</form>
@endsection
