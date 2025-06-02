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
        id="siteactivity-stats-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('siteactivity.tabs.stats_tab') }}"
    >
        Stats
    </button>
    <button
        id="siteactivity-activity-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('siteactivity.tabs.activity_tab') }}"
    >
        Activity
    </button>
     <button
        id="siteactivity-events-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('siteactivity.tabs.events_tab') }}"
    >
        Events
    </button>
    <button
        id="siteactivity-exports-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('siteactivity.tabs.exports_tab') }}"
    >
        Exports
    </button>
    

   


    </div>
</div>



  </body>
</html>