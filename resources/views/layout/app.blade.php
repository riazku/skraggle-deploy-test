<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="flex">
    @include('components.sidebar') {{-- Sidebar on the left --}}
    
    <main class="flex-1 p-6 bg-gray-100">
        @yield('content')
    </main>
</body>
</html>