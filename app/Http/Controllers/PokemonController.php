<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemones = Pokemon::all();
        return view('pokemones.index', compact('pokemones'));
    }

    public function create()
    {
        return view('pokemones.create');
    }

    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect()->route('pokemones.index');
    }

    public function show(Pokemon $pokemone)
    {
        $pokemon = $pokemone;
        return view('pokemones.show', compact('pokemon'));
    }

    public function edit(Pokemon $pokemone)
    {
        $pokemon = $pokemone;
        return view('pokemones.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemon $pokemone)
    {
        $pokemon = $pokemone;
        $pokemon->update($request->all());
        return redirect()->route('pokemones.index');
    }

    public function destroy(Pokemon $pokemone)
    {
        $pokemon = $pokemone;
        $pokemon->delete();
        return redirect()->route('pokemones.index');
    }
}
