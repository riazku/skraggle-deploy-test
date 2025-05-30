<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    


    <title>Campaigns</title>
</head>
<body>
    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-1 mb-6">
            <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">My Campaigns</button>
            <button class="px-3 py-1.5 rounded-lg text-gray-600 text-sm ">Scenarios</button>
        </div> --}}

        <div class="bg-white p-6 rounded-lg border border-gray-300 shadow">
            <!-- Header and Search -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold">Draft workflow campaigns</h2>
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

            <!-- Campaign Form -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700">Tittle</label>
                <div class="mt-1 flex justify-between items-center">
                    <input type="text" id="title" placeholder="Please add a tittle" class="block w-[66%] border border-gray-300 rounded-md shadow-sm p-2">
                    <button class="ml-4 text-sm text-gray-600 border border-gray-300 rounded-md px-3 py-1 hover:bg-gray-100">Edit Content</button>
                </div>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1 flex justify-between items-start">
                    <textarea id="description" rows="8" placeholder="Please add a tittle" class="block w-[66%] border border-gray-300 rounded-md shadow-sm p-2"></textarea>
                    <button class="ml-4 text-sm text-gray-600 border border-gray-300 rounded-md px-3 py-1 hover:bg-gray-100">Edit Content</button>
                </div>
            </div>

            <!-- Counters -->
            <div class="flex justify-center space-x-4 text-sm text-gray-600 mb-8">
                <span class="bg-gray-100 px-2 py-1 rounded-md">Delivered: 00</span>
                <span class="bg-gray-100 px-2 py-1 rounded-md">Conversion: 00</span>
            </div>

            
        </div>

        <div class="flex justify-end mt-5 items-center">
        
            <div class="relative">
                <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center space-x-2 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.25 2.25 0 0 0 21 19.25V17.25m1.5-1.5-1.5-1.5m-1.5-1.5-1.5-1.5m-1.5-1.5L12 9m2.25-2.25L9 12M4.5 12V8.25a2.25 2.25 0 0 1 2.25-2.25h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H15" />
                      </svg>
                      <span>Tools</span>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                      </svg>
                </button>
                <!-- Dropdown content here if needed -->
            </div>
        </div>



        <div class="flex justify-center space-x-4">
            <button class="bg-[#551895] text-white px-6 py-2 rounded-lg flex items-center space-x-2 hover:bg-purple-800">
             <div class="border border-white p-0.5 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                  </svg>
             </div>
                  <span>Add Campaigns</span>
            </button>
            <button class="border border-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-100">Copy</button>
        </div>




        <div class="text-center mt-4">
            <a href="#" class="text-blue-600 underline text-sm">What are workflow campaigns?</a>
        </div>



    </div>
</body>
</html>