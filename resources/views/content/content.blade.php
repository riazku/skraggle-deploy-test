<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{--     
    <style>

      /* Custom styles for active tab */
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
     @include('components.content_tab')
    </div>

</div>
    


<div class="w-[77%] mx-auto mt-45 ml-48">
    <div id="tab-content" class="mt-4">
    </div>

</div>

<script src ={{ asset('js/tabs.js') }}></script>




</body>
</html>
