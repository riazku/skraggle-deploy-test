<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>


    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded ">Default Settings</button>
            <button class="px-4 py-1 rounded text-gray-700 border   border-gray-300 hover:bg-gray-200">Cross Sells</button>
            <button class="px-4 py-1 rounded text-gray-700 border  border-gray-300 hover:bg-gray-200">Product Match </button>
            
            
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895] border border-gray-300 hover:bg-gray-200">Test Algorithms</button>

 

        </div>      --}}

        <!-- Preview Section -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-6">Preview product recommendation results</h2>

            <!-- Choose algorithm -->
<div class="bg-[#EEEAFF] p-4 rounded-lg">
    <div class="mb-6 bg-[#EEEAFF] rounded">
        <label class="block text-lg font-semibold mb-2">Choose algorithm</label>
        <div class="relative">
            <input type="text" placeholder="User email or ID" class="w-full px-3 py-2 border border-gray-300 rounded pr-10 bg-white">
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>

    <!-- Algorithm Params -->
    <div class="mb-6 bg-[#EEEAFF] rounded">
        <label class="block text-lg font-semibold mb-2">Algorithm Params</label>
        <textarea placeholder="Event JSON" class="w-full h-40 px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
    </div>

    <!-- User ID or Email -->
    <div class="mb-6 bg-[#EEEAFF] rounded">
        <label class="block text-lg font-semibold mb-2">User ID or Email</label>
        <textarea placeholder="Event JSON" class="w-full h-24 px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
    </div>

    <!-- Event -->
    <div class="mb-6 bg-[#EEEAFF] rounded">
        <label class="block text-lg font-semibold mb-2">Event</label>
        <textarea placeholder="Event JSON" class="w-full h-24 px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
    </div>

    <!-- Preview Results Button -->
    <button class="px-6 py-2 bg-[#551895] text-white rounded">Preview Results</button>


</div>


        </div>



    </div>

</body>
</html>