<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <title>Document</title>
  </head>
  <body>

  <div class="fixed z-20 top-[123px] left-[320px] right-0 z-10 bg-white">
    <div class="flex items-center space-x-4 px-8 py-4">

    <button
        id="email-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('campaigns.tabs.email_tab') }}"
    >
        Email
    </button>
    <button
        id="intercaction-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('campaigns.tabs.interaction_tab') }}"
    >
        Interaction
    </button>
    <button
        id="webpush-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('campaigns.tabs.webpush_tab') }}"
    >
        Web Push
    </button> 

    <button
        id="survey-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('campaigns.tabs.survey_tab') }}"
    >
        Survey
    </button>


   


    </div>
</div>



  </body>
</html>