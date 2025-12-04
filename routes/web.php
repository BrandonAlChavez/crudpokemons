<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', function () {
    return redirect()->route('pokemones.index');
});

Route::resource('pokemones', PokemonController::class);
