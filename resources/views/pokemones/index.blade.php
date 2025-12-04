@extends('layouts.layout')

@section('content')
<h1 class="text-4xl font-extrabold text-center mb-6">Lista de Pokémon</h1>

<div class="flex justify-end mb-4">
    <a href="{{ route('pokemones.create') }}" 
       class="poke-blue text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 transition">
       + Crear Pokémon
    </a>
</div>

<table class="min-w-full bg-white border border-gray-300 rounded-xl overflow-hidden shadow-xl">
    <thead class="poke-red text-white">
        <tr>
            <th class="py-3 px-4 text-left">ID</th>
            <th class="py-3 px-4 text-left">Nombre</th>
            <th class="py-3 px-4 text-left">Tipo</th>
            <th class="py-3 px-4 text-left">Ataque</th>
            <th class="py-3 px-4 text-left">Defensa</th>
            <th class="py-3 px-4 text-center">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($pokemones as $pokemon)
        <tr class="border-b hover:bg-yellow-100 transition">
            <td class="py-2 px-4">{{ $pokemon->id }}</td>
            <td class="py-2 px-4 font-semibold">{{ $pokemon->nombre }}</td>
            <td class="py-2 px-4">{{ $pokemon->tipo }}</td>
            <td class="py-2 px-4">{{ $pokemon->ataque }}</td>
            <td class="py-2 px-4">{{ $pokemon->defensa }}</td>
            <td class="py-2 px-4 text-center">
                <a href="{{ route('pokemones.show', $pokemon->id) }}" 
                   class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-700 mx-1 transition">
                    Ver
                </a>

                <a href="{{ route('pokemones.edit', $pokemon->id) }}" 
                   class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 mx-1 transition">
                    Editar
                </a>

                <form action="{{ route('pokemones.destroy', $pokemon->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-700 mx-1 transition"
                            type="submit">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
