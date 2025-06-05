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
        id="emailactivity-event-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('emailactivity.tabs.events_tab') }}"
        data-content-target="tab-content"
          data-default-tab="true"
    >
        Events
    </button>
    <button
        id="emailactivity-click-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('emailactivity.tabs.clicks_tab') }}"
        data-content-target="tab-content"
          data-default-tab="true"
    >
        Clicks
    </button>
    

   


    </div>
</div>



  </body>
</html>