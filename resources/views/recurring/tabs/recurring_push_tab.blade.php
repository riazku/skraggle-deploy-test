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
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="75"
          height="75"
          viewBox="0 0 75 75"
          fill="none"
          class="mx-auto"
        >
          <path
            d="M31.5034 35.9978L11.1285 15.6229C9.7895 14.2839 7.5 15.2322 7.5 17.1259L7.5 57.8757C7.5 59.7694 9.7895 60.7177 11.1285 59.3787L31.5034 39.0038C32.3335 38.1737 32.3335 36.8279 31.5034 35.9978Z"
            stroke="black"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
          <path
            d="M66.8774 35.9978L46.5025 15.6229C45.1635 14.2839 42.874 15.2322 42.874 17.1259V57.8757C42.874 59.7694 45.1635 60.7177 46.5025 59.3787L66.8774 39.0038C67.7075 38.1737 67.7075 36.8279 66.8774 35.9978Z"
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
