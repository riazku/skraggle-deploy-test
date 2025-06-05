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
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('campaigns.tabs.email_tab') }}"
         data-content-target="tab-content"
         data-default-tab="true"
       
    >
        Email
    </button>
    <button
        id="intercaction-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('campaigns.tabs.interaction_tab') }}"
         data-content-target="tab-content"
         data-default-tab="true"
    >
        Interaction
    </button>
    <button
        id="webpush-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('campaigns.tabs.webpush_tab') }}"
       data-content-target="tab-content"
         data-default-tab="true"
    >
        Web Push
    </button> 

    <button
        id="survey-tab"
        class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
        data-content-route="{{ route('campaigns.tabs.survey_tab') }}"
        data-content-target="tab-content"
          data-default-tab="true"
    >

        Survey
    </button>


   


    </div>
</div>



  </body>
</html>