<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>@yield('title', 'My Laravel App')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Add Chart.js to your layout -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    
    {{-- <style>
      /* Custom styles for active tab */
      .tab-button.active {
        background-color: #551895;
        color: white;
      }
    </style> --}}
</head>

<body>
<div class="h-screen">
    <div>
        @include('components.sidebar')
    </div>

     <div>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.dataimport_tab')
    </div>
</div>

{{-- Main Content Wrapper --}}
<div class=" w-[77%] mx-auto mt-45 ml-48">
     <div id="tab-content" class="mt-4">
    </div>
</div>




<script src="{{ asset('js/tabs.js') }}"></script>


</body>
</html>