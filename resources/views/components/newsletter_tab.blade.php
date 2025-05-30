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
        id="email-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('newsletter.tabs.news_email_tab') }}"
    >
        Email
    </button>
    <button
        id="push-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('newsletter.tabs.push_tab') }}"
    >
        Push
    </button>

    <button
        id="text-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('newsletter.tabs.text_tab') }}"
    >
        Text
    </button>
    <button
        id="whatsapp-tab"
        class="tab-button bg-gray-200 text-gray-700 px-4 py-2 rounded-md focus:outline-none"
        data-content-route="{{ route('newsletter.tabs.whatsapp_tab') }}"
    >
        Whatsapp
    </button>
    

   


    </div>
</div>



  </body>
</html>