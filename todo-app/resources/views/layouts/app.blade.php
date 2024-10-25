<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'To-Do App')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Включение компонента хедера -->
    <x-header title="To-Do App" description="Управление задачами для команд" />

    <nav class="bg-blue-600 p-4 text-white">
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/about" class="hover:underline">About Us</a></li>
            <li><a href="/tasks" class="hover:underline">Tasks</a></li>
        </ul>
    </nav>


    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
