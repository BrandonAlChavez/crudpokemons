<!DOCTYPE html>
<html>
<head>
    <title>CRUD Pokémon</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Colores tipo Pokémon */
        .poke-red { background-color: #EF5350; }
        .poke-blue { background-color: #42A5F5; }
        .poke-yellow { background-color: #FFEB3B; }
        .poke-dark { background-color: #1E1E1E; }
        .poke-card { background-color: #F7FAFC; }
    </style>
</head>

<body class="bg-gradient-to-r from-red-400 via-yellow-300 to-blue-400 min-h-screen">

    <nav class="poke-dark text-white p-4 shadow-lg">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold tracking-widest">POKÉDEX CRUD</h1>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        <div class="bg-white bg-opacity-70 p-6 rounded-xl shadow-xl">
            @yield('content')
        </div>
    </div>

</body>
</html>
