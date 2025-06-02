<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Laravel App</title>
</head>
<body class="flex h-screen">

    {{-- Sidebar --}}
    <aside class="fixed top-0 left-0 h-full bg-purple-900 text-white w-16 md:w-20 flex flex-col items-center py-4 shadow-lg     ">
        <div class="p-2">
            <img src="{{ asset('images/image 28.svg') }}" alt="Logo" class="w-10 h-10">
        </div>

        <nav class="flex-grow flex flex-col justify-center w-full items-center">
            <ul>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/Exclude.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/contact-01.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/mail-02.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 rounded-full w-10 h-10 bg-white">
                        <img src="{{ asset('images/content.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/pen-tool-add.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/marketing.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/mdi_donation.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/chart-rose.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
                <li class="mb-2">
                    <a href="#" class="flex items-center justify-center p-3 hover:bg-purple-800 rounded-full w-10 h-10">
                        <img src="{{ asset('images/heroicons_building-office-20-solid.svg') }}" alt="Icon" class="h-6 w-6 object-contain">
                    </a>
                </li>
            </ul>
        </nav>

        <div class="mt-4">
            <a href="#" class="flex items-center justify-center p-4 hover:bg-purple-800 rounded-lg w-12 h-12">
                <img src="{{ asset('images/ghost.svg') }}" alt="Logout Icon" class="h-6 w-6 object-contain">
            </a>
        </div>
    </aside>

    {{-- Main Content --}}
    <main class="ml-16 md:ml-20 p-8">
        @yield('content')
    </main>

</body>
</html>



