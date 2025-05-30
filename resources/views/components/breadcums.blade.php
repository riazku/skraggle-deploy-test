<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>


<body>












{{-- Remove HTML boilerplate since this is a component --}}
{{-- Breadcrumb Navigation --}}
<nav class="fixed top-[75px] left-[320px] right-0 z-20 bg-white">
    <div class="flex items-center">
        {{-- Breadcrumb Section (left aligned) --}}
        <div class="flex items-center px-8 py-4 text-sm text-gray-600">
            {{-- First Item --}}
            <div class="flex items-center">
                <a href="#" class="text-gray-400 font-medium hover:text-purple-700 transition-colors">
                    Contacts
                </a>
                <svg class="w-5 h-5 text-gray-400 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>

            {{-- Current Page --}}
            <div>
                <span class="text-gray-400 font-medium">
                    All Contacts
                </span>
            </div>
        </div>
    </div>
</nav>

</body>
</html>