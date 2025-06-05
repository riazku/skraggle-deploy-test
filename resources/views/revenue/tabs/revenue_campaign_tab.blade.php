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

      <div class="bg-white p-4 rounded-lg border border-gray-300 shadow">
        <!-- Header and Search -->
        <div class="flex justify-end  flex-wrap mb-1">
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
        <div class="mb-2 ">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >Campaign type 1</label
          >
          <div class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-center">
            <div class="flex justify-start items-center w-[40%] rounded-md border border-gray-300 ">
              <input
              type="text"
              id="title"
              placeholder="Please add a tittle"
              class=" w-[95%] p-2 outline-none"
              />
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
                <path d="M9.72864 1.0622C10.0251 1.28054 10.0884 1.69787 9.87008 1.99434C9.70049 2.22461 9.53086 2.4435 9.38208 2.63414C9.08507 3.01472 8.67618 3.52441 8.23195 4.03605C7.79059 4.54438 7.30123 5.06988 6.84437 5.47355C6.61671 5.67471 6.38141 5.85971 6.15196 5.99803C5.94081 6.12532 5.65068 6.26562 5.33326 6.26562C5.01584 6.26562 4.72569 6.12532 4.51455 5.99803C4.2851 5.85971 4.0498 5.67471 3.82213 5.47355C3.36527 5.06988 2.87591 4.54438 2.43456 4.03605C1.99032 3.52441 1.58144 3.01472 1.28443 2.63414C1.13565 2.4435 0.966016 2.22461 0.796421 1.99434C0.578078 1.69787 0.641406 1.28054 0.937868 1.0622C1.05704 0.974427 1.19575 0.932179 1.33321 0.932295L5.33326 0.932295L9.33329 0.932295C9.47075 0.932179 9.60946 0.974427 9.72864 1.0622Z" fill="#B2B9C7"/>
              </svg>
            </div>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md  px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>

        <div class="mt-4 ">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >Total assisted</label
          >

          <div class="flex justify-between items-start">

          <div class="flex justify-start items-center gap-2 w-[40%]">

          <div class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-start mt-2">
           <div class="text-center text-[#3F3F3F] bg-[#F6F6F6] rounded-md p-3 flex justify-center items-center w-[240px] h-[130px]">
            Conversions: 00
           </div>
           
          </div>
           <div class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-start mt-2">
           <div class="text-center text-[#3F3F3F] bg-[#F6F6F6] rounded-md p-3 flex justify-center items-center w-[240px] h-[130px]">
        Value (USD): 00
           </div>
         
          </div>

          </div>
 <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md  px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
       
        </div>

      </div>

      
    </div>
  </body>
</html>
