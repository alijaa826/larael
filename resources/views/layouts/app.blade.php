<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kursus Online</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 flex justify-between">
        <h1 class="text-xl font-bold"><a href="/">Kursus Online</a></h1>
        <div>
            @auth
                <span>Halo, {{ auth()->user()->name }}</span>
            @else
                <a href="#" class="text-blue-500">Login</a>
            @endauth
        </div>
    </nav>
    <main class="container mx-auto p-4">
        @yield('content')
    </main>
</body>
</html>
