<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

Route::get('/', function () {
    return redirect('/pokemones');
});

Route::resource('pokemones', PokemonController::class);
