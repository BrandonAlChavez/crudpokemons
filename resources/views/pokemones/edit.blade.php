@extends('layouts.layout')

@section('content')
<h1 class="text-3xl font-bold mb-6">Editar Pokémon</h1>

<form action="{{ route('pokemones.update', $pokemon->id) }}" method="POST"
      class="bg-white bg-opacity-60 p-6 rounded-xl shadow-xl space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="font-bold">Nombre:</label>
        <input type="text" name="nombre" value="{{ $pokemon->nombre }}"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Tipo:</label>
        <input type="text" name="tipo" value="{{ $pokemon->tipo }}"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Ataque:</label>
        <input type="number" name="ataque" value="{{ $pokemon->ataque }}"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <div>
        <label class="font-bold">Defensa:</label>
        <input type="number" name="defensa" value="{{ $pokemon->defensa }}"
               class="w-full border px-3 py-2 rounded-lg">
    </div>

    <button class="poke-yellow text-black w-full py-3 rounded-lg hover:bg-yellow-400 transition">
        Actualizar
    </button>
</form>
@endsection
