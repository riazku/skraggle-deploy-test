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

      <div
        class="bg-[#FCF8E3] text-[#8A6D3B] font-semibold text-center text-[16px] md:w-[40%] w-[90%] mx-auto py-3 px-4 rounded-lg border-[#E1D7C5] border"
      >
        Push notifications are disabled.
        <span class="text-[#37A4FD] font-bold"> Enable now! </span>
      </div>

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
      <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none" class="mx-auto">
  <path d="M22.5 22.5H48.75M22.5 37.5H37.5M36.5217 51.8478L20.8696 67.5V51.8478H15C10.8579 51.8478 7.5 48.49 7.5 44.3478V15C7.5 10.8579 10.8579 7.5 15 7.5H60C64.1421 7.5 67.5 10.8579 67.5 15V44.3478C67.5 48.49 64.1421 51.8478 60 51.8478H36.5217Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
      </div>
    </div>
  </body>
</html>



