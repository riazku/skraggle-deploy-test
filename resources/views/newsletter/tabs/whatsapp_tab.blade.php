<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Campaigns</title>
  </head>
  <body>
    <div class="container mx-auto p-6">
      
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Emails
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Push
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Text
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          WhatsApp
        </button>
      </div> --}}
{{-- 
      <div
        class="bg-[#FCF8E3] text-[#8A6D3B] font-semibold text-center text-[16px] md:w-[40%] w-[90%] mx-auto py-3 px-4 rounded-lg border-[#E1D7C5] border"
      >
        Push notifications are disabled.
        <span class="text-[#37A4FD] font-bold"> Enable now! </span>
      </div> --}}

      <div class="flex flex-wrap md:gap-0 gap-3 justify-center space-x-4 mt-8">
        <button
          class="bg-[#551895] text-white px-8 py-3 rounded-lg flex items-center space-x-2 hover:bg-purple-800"
        >
          <div class="border border-white p-0.5 rounded-full">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 4.5v15m7.5-7.5h-15"
              />
            </svg>
          </div>
          <span>Add Campaigns</span>
        </button>
        <button
          class="border border-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100"
        >
          Copy
        </button>
      </div>

      <div class="text-center mt-1">
        <a href="#" class="text-[#37A4FD] font-medium text-[16px]"
          >What are workflow campaigns?</a
        >
      </div>
      <p class="text-[#3F3F3F] text-center md:w-[35%] w-[90%] mx-auto mt-4">
        Send beautiful and useful newsletters to your subscribers or segment
        them. Include products, recommendation, or banners using our visual
        editors
      </p>

      <div class="mx-auto mt-2">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="75"
          height="75"
          viewBox="0 0 75 75"
          fill="none"
          class="mx-auto"
        >
          <path
            d="M37.5 68.75C54.7594 68.75 68.75 54.7594 68.75 37.5C68.75 20.2406 54.7594 6.25 37.5 6.25C20.2406 6.25 6.25 20.2406 6.25 37.5C6.25 41.8094 7.125 45.9156 8.7 49.65C9.57187 51.7125 10.0063 52.7438 10.0625 53.525C10.1156 54.3063 9.88438 55.1625 9.425 56.8781L6.25 68.75L18.1219 65.575C19.8375 65.1156 20.6938 64.8875 21.475 64.9375C22.2563 64.9938 23.2875 65.4281 25.35 66.3C29.1958 67.9197 33.327 68.7527 37.5 68.75Z"
            stroke="black"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M26.8376 38.6781L29.5594 35.3C30.7063 33.875 32.1219 32.55 32.2376 30.65C32.2626 30.1719 31.9251 28.0219 31.2532 23.7188C30.9876 22.0281 29.4063 21.875 28.0407 21.875C26.2594 21.875 25.3688 21.875 24.4844 22.2813C23.3657 22.7906 22.2188 24.225 21.9657 25.4281C21.7657 26.3813 21.9157 27.0375 22.2125 28.35C23.4688 33.9219 26.4219 39.425 30.9969 44.0031C35.575 48.5781 41.0782 51.5313 46.6532 52.7875C47.9657 53.0844 48.6188 53.2344 49.5719 53.0344C50.7751 52.7844 52.2094 51.6344 52.7219 50.5156C53.1251 49.6313 53.1251 48.7406 53.1251 46.9594C53.1251 45.5906 52.9719 44.0125 51.2813 43.7469C46.9782 43.0719 44.8282 42.7375 44.3501 42.7625C42.4532 42.875 41.1251 44.2938 39.7001 45.4406L36.3219 48.1594"
            stroke="black"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </div>
    </div>
  </body>
</html>
