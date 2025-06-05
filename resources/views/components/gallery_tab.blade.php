<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @vite('resources/css/app.css')
    
    <title>Document</title>
  </head>
  <body>

  <div class="fixed z-20 top-[123px] left-[320px] right-0 z-10 bg-white">
    <div class="flex items-center space-x-4 px-8 py-4">

    <button
        id="gallery-discover-tab"
        class="tab-button px-4 py-2 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('gallery.tabs.discover_tab') }}"
        data-content-target="tab-content"
         data-default-tab="true"
    >
        Discover
    </button>
    <button
        id="gallery-private-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('gallery.tabs.private_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Private
    </button>

 
   


    </div>
</div>



  </body>
</html>