<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
  </head>
  <body>

  <div class="fixed z-20 top-[123px] left-[320px] right-0 z-10 bg-white">
    <div class="flex items-center space-x-4 px-8 py-4">

        <button
    id="overview-button"
    class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md"
    data-content-route="{{ route('home.tabs.overview') }}"
    data-tab-id="overview"
>
    Overview
</button>

<button
    class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md"
    data-content-route="{{ route('home.tabs.getstarted') }}"
    data-tab-id="getstarted"
>
    Getting Started
</button>

<button
    class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md"
    data-content-route="{{ route('home.tabs.cockpit') }}"
    data-tab-id="cockpit"
>
    Cockpit
</button>




    </div>
</div>








{{-- <div class="flex gap-2 mt-4" id="tab-buttons">
    
</div> --}}

  </body>
</html>