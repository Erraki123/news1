<x-app-layout>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 dark:bg-red-900">
    <div class="flex flex-col md:flex-row h-screen">
        <!-- Sidebar -->
        <div class="bg-red-800 text-white w-full md:w-64 p-4">
            <h2 class="text-2xl font-bold">Admin Panel</h2>
            <ul class="mt-4">
                <li><a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a></li>
                <li><a href="{{ route('annonces.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Annonces</a></li>
                <li><a href="{{ route('contacts.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Messages</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 overflow-auto">
            <header class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold dark:text-white">Dashboard</h1>
                <button id="theme-toggle" class="p-2 bg-gray-200 dark:bg-gray-700 rounded-lg">
                </button>
            </header>

            @if (Route::currentRouteName() == 'dashboard')
                @include('layouts.count')
            @endif

            @yield('content')
        </div>
    </div>

  
</body>
</html>
</x-app-layout>

