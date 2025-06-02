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
        id="segmentlist-mysegment-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('segmentslists.tabs.mysegment_tab') }}"
    >
        My Segments
    </button>
    <button
        id="segmentlist-mylist-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('segmentslists.tabs.mylist_tab') }}"
    >
        My Lists
    </button>
     <button
        id="segmentlist-defualt-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('segmentslists.tabs.default_tab') }}"
    >
        Defaults
    </button>
    
    

   


    </div>
</div>



  </body>
</html>