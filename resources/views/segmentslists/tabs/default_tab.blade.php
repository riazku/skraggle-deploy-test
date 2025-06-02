<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Campaigns</title>
</head>
<body>
    <div class="container mx-auto p-6">
        <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Segments
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Lists
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Defaults
        </button>
      </div> --}}

        <div class="bg-white p-6 rounded-lg border border-gray-300 shadow">
            <!-- Header and Search -->
            <div class="flex justify-end items-center mb-6">
                 <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search" class=" border-gray-300 border-b  px-3 py-1 pl-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400 absolute left-2 top-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                          </svg>
                    </div>
                    <button class="bg-[#CABCF8] text-[#551895] px-3 py-1 font-bold rounded-md">Running</button>
                    <button class="border-gray-200 border text-gray-600 px-3 py-1 font-bold rounded-md">Paused</button>
                </div>
            </div>



            <div class="grid grid-cols-2 gap-4 mt-6">
                <!-- Card 1 -->
                <div class="bg-[#EEEAFF] p-4 rounded-lg">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">Web Push Subcribers</h4>
                    <p class="text-gray-600 text-sm mb-4">Email sent to confirm user subscription to a list.</p>
                    <button class="bg-[#551895] text-white px-4 py-2 rounded-md hover:bg-purple-800">Copy Campaign</button>
                </div>
                <!-- Card 2 -->
                <div class="bg-[#EEEAFF] p-4 rounded-lg">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">5 Steps welcome series</h4>
                    <p class="text-gray-600 text-sm mb-4">Email sent to confirm user subscription to a list.</p>
                    <button class="bg-[#551895] text-white px-4 py-2 rounded-md hover:bg-purple-800">Copy Campaign</button>
                </div>
                <!-- Card 3 -->
                <div class="bg-[#EEEAFF] p-4 rounded-lg">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">Cart abandonment</h4>
                    <p class="text-gray-600 text-sm mb-4">Email sent to confirm user subscription to a list.</p>
                    <button class="bg-[#551895] text-white px-4 py-2 rounded-md hover:bg-purple-800">Copy Campaign</button>
                </div>
                <!-- Card 4 -->
                <div class="bg-[#EEEAFF] p-4 rounded-lg">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">Price drop campaign</h4>
                    <p class="text-gray-600 text-sm mb-4">Email sent to confirm user subscription to a list.</p>
                    <button class="bg-[#551895] text-white px-4 py-2 rounded-md hover:bg-purple-800">Copy Campaign</button>
                </div>
                <!-- Card 5 -->
                <div class="bg-[#EEEAFF] p-4 rounded-lg">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">Back in stock</h4>
                    <p class="text-gray-600 text-sm mb-4">Email sent to confirm user subscription to a list.</p>
                    <button class="bg-[#551895] text-white px-4 py-2 rounded-md hover:bg-purple-800">Copy Campaign</button>
                </div>
            </div>

          
        </div>

     
 


       



   


    </div>
</body>
</html>
