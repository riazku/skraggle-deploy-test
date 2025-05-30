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

      {{-- <div class="bg-white p-6 rounded-lg border border-gray-300 shadow">
        <!-- Header and Search -->
        <div class="flex justify-between  flex-wrap  mb-6">
          <h2 class="text-xl font-semibold">Draft dfdfsdfsdworkflow campaigns</h2>
          <div class="flex items-center flex-wrap  md:gap-0 gap-3 space-x-4">
            <div class="relative">
              <input
                type="text"
                placeholder="Search"
                class="border-gray-300 border-b px-3 py-1 pl-8"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 text-gray-400 absolute left-2 top-2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
                />
              </svg>
            </div>
            <button
              class="bg-[#CABCF8] text-[#551895] px-3 py-1 font-bold rounded-md"
            >
              Running
            </button>
            <button
              class="border-gray-200 border text-gray-600 px-3 py-1 font-bold rounded-md"
            >
              Paused
            </button>
          </div>
        </div>

        <!-- Campaign Form -->
        <div class="mb-6 ">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >Tittle</label
          >
          <div class="mt-1 flex  gap-3 justify-between items-center">
            <input
              type="text"
              id="title"
              placeholder="Please add a tittle"
              class="block w-[55%] w-full border border-gray-300 rounded-md shadow-sm p-2"
            />
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md  px-2  w-[140px] py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>

        <div class="mb-6">
          <label
            for="description"
            class="block text-sm font-medium text-gray-700"
            >Description</label
          >
          <div class="mt-1 flex  md:gap-0 gap-3 justify-between items-start">
            <textarea
              id="description"
              rows="8"
              placeholder="Please add a tittle"
              class="block md:w-[56%] w-full border border-gray-300 rounded-md shadow-sm p-2"
            ></textarea>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md  px-2  w-[140px] py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>

        <!-- Counters -->
        <div class="flex justify-center space-x-4 text-sm text-gray-600 mb-8">
          <span class="bg-gray-100 px-2 py-1 rounded-md">Delivered: 00</span>
          <span class="bg-gray-100 px-2 py-1 rounded-md">Conversion: 00</span>
        </div>
      </div> --}}

      <div class="flex justify-center space-x-4 mt-6">
        <button
          class="bg-[#551895] text-white px-6 py-2 rounded-lg flex items-center space-x-2 hover:bg-purple-800"
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

      <div class="text-center mt-4">
        <a href="#" class="text-[#37A4FD] font-medium text-[16px] mb-5"
          >What are workflow campaigns?</a
        >
      </div>
      <p class="text-[#3F3F3F] text-center md:w-[35%] w-[90%] mx-auto mt-2">
        Send beautiful and useful newsletters to your subscribers or segment
        them. Include products, recommendation, or banners using our visual
        editors
      </p>

      <div class="mx-auto">

        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto" width="75" height="75" viewBox="0 0 75 75" fill="none">
         <path d="M51.5625 23.4375L23.4375 23.4375M51.5625 33.9844L23.4375 33.9844M9.375 19.9219L9.375 55.0781C9.375 60.903 14.097 65.625 19.9219 65.625H55.0781C60.903 65.625 65.625 60.903 65.625 55.0781V19.9219C65.625 14.097 60.903 9.375 55.0781 9.375L19.9219 9.375C14.097 9.375 9.375 14.097 9.375 19.9219Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>

      </div>
    </div>
  </body>
</html>
