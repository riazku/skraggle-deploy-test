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
    id="accountinfo-tab"
    class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
    data-content-route="{{ route('accountinfo.tabs.info_tab') }}"
    data-content-target="tab-content"
    data-default-tab="true"
>
    Info
</button>

<button
    id="accountinfo-notification-tab"
    class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
    data-content-route="{{ route('accountinfo.tabs.notification_tab') }}"
    data-content-target="tab-content"
    data-default-tab="true"
>
    Notifications
</button>

<button
    id="accountinfo-code-tab"
    class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
    data-content-route="{{ route('accountinfo.tabs.code_tab') }}"
    data-content-target="tab-content"
         data-default-tab="true"
>
    Integration Code
</button>

    <button
    id="accountinfo-api-tab"
    class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
    data-content-route="{{ route('accountinfo.tabs.api_tab') }}"
    data-content-target="tab-content"
    data-default-tab="true"
>
    API key & Account id
</button>





    </div>
</div>


{{-- <div class="flex gap-2 mt-4" id="tab-buttons">
    
</div> --}}

  </body>
</html>