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
        id="setup-catalog-tab"
        class="tab-button px-4 py-2 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.catalog_tab') }}"
        data-content-target="tab-content"
         data-default-tab="true"
    >
        Catalog
    </button>
    <button
        id="setup-parsing-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.parsing_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Parsing
    </button>

    <button
        id="setup-autofeed-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.autofeed_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Auto feed
    </button>

    <button
        id="setup-preview-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.preview_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Preview

    </button>

    <button
        id="setup-export-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.export_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Export

    </button>


    <button
        id="setup-datafeed-tab"
        class="tab-button px-4 py-2 rounded-md focus:outline-none bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        data-content-route="{{ route('setup_catalog.tabs.datafeed_tab') }}"
         data-content-target="tab-content"
          data-default-tab="true"
    >
        Data Feeds

    </button>
    

   


    </div>
</div>



  </body>
</html>