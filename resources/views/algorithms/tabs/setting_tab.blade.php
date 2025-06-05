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
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Default Settings</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Cross Sells</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Product Match </button>
            
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Test Algorithms</button>

 

        </div>      --}}

        <!-- Introductory text -->
        <p class="mb-6 text-gray-700">The following settings will be applied to all product recommendation blocks. You can overwrite them in campaigns.</p>

        <!-- Include & Exclude Filters Section -->
        <div class="!bg-[#EEEAFF] p-6 rounded mb-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-[#551895]">Include & Exclude Filters</h3>
                <div>
                    <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895] text-sm">Basic</button>
                    <button class="px-4 py-1 rounded border border-gray-300 text-gray-700 hover:bg-gray-200 text-sm">Advanced</button>
                </div>
            </div>

            <!-- Exclude Products -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Exclude Products</label>
                <input type="text" placeholder="User email or ID" class="w-full h-16 px-3 py-2 border border-gray-300 rounded bg-white">
            </div>

            <!-- Add Products -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Add Products</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Exclude Categories -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Exclude Categories</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Add Categories -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Add Categories</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Minimum Stock -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Minimum Stock</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Minimum Price -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Minimum Price</label>
                <textarea placeholder="Event JSON" class="w-full px-3 py-2 border border-gray-300 rounded bg-white"></textarea>
            </div>

            <!-- Only main items -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Only main items</label>
                <div>
                    <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895] mr-2">True</button>
                    <button class="px-4 py-1 rounded border border-gray-300 text-gray-700">False</button>
                </div>
            </div>

            <!-- Save Button -->
            <button class="px-6 py-2 bg-[#551895] text-white rounded">Save</button>

        </div>


    </div>
    
</body>
</html>