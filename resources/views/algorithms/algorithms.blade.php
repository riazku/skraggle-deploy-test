<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>@yield('title', 'My Laravel App')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- @vite('resources/css/app.css') --}}
    

    
    {{-- <style>

      Custom styles for active tab
      .tab-button.active {
        background-color: #551895; /* Example active background color */
        color: white; /* Example active text color */
      }
      </style> --}}
</head>



<body>

<div class="h-screen">

    <div>
        @include('components.sidebar')
    </div>

     <div>>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.algorithms_tab')
    </div>

</div>
    


    <div class=" w-[77%] mx-auto mt-45 ml-48" id="tab-content">
     {{-- <div id="tab-content" class="mt-4">
    </div> --}}
</div>




<script src="{{ asset('js/tabs.js') }}"></script>
      
</body>
</html>
