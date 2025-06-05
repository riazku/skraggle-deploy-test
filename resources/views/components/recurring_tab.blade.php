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
            id="recurring-email-tab"
            class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
            data-content-route="{{ route('recurring.tabs.recurring_email_tab') }}"
            data-content-target="tab-content"
          data-default-tab="true"
        >
            Email
        </button>
        <button
            id="recurring-push-tab"
            class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
            data-content-route="{{ route('recurring.tabs.recurring_push_tab') }}"
            data-content-target="tab-content"
          data-default-tab="true"
        >
            Push
        </button>
        <button
            id="recurring-text-tab"
            class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
            data-content-route="{{ route('recurring.tabs.recurring_text_tab') }}"
            data-content-target="tab-content"
          data-default-tab="true"
        >
            Text
        </button>
        <button
            id="recurring-whatsapp-tab"
            class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
            data-content-route="{{ route('recurring.tabs.recurring_whatsapp_tab') }}"
            data-content-target="tab-content"
          data-default-tab="true"
        >
            WhatsApp
        </button>
        <button
            id="recurring-scenarios-tab"
            class="tab-button text-black px-4 py-2 !border-1 !border-gray-200 rounded-md"
            data-content-route="{{ route('recurring.tabs.recurring_scenarios_tab') }}"
            data-content-target="tab-content"
          data-default-tab="true"
        >
            Scenarios
        </button>
    </div>
</div>



  </body>
</html>