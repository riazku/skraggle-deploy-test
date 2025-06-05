<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <script src="https://cdn.tailwindcss.com"></script>
    


</head>
<body>


    <div class="container mx-auto p-6 ">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Info</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Notification </button>
            
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Integration Code</button>
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">API Key & Account ID</button>

 

        </div>      --}}

        <!-- API Key & Account ID Content -->
        <div class="p-6 bg-[#EEEAFF] rounded-lg">
            <!-- Secret API Key Section -->
            <div class="mb-6">
                <h3 class="text-lg font-semibold mb-4">Secret API Key. Use it for our integration module & API Requests</h3>
                <input type="text" placeholder="User email or ID" class="w-full px-3 h-16 py-2 border border-gray-300 !rounded-lg bg-white">
            </div>

            <!-- Account ID Section -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Account ID</h3>
                <input type="text" placeholder="User email or ID" class="w-full px-3 h-16 py-2 border border-gray-300 !rounded-lg bg-white">
            </div>
        </div>




</div>
    
</body>
</html>