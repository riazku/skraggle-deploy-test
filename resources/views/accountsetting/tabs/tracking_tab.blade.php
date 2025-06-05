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
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Setting</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">JS Integration</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Advance JS</button>
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">UTM Tracking</button>



 

        </div>      --}}
         <p class="text-sm text-gray-700 mb-4">UTM tracking params are added to every link. You can also modify them on campaign level.</p>
 
        <!-- UTM Tracking Content -->
        <div class="mt-8 p-6 bg-[#EEEAFF] rounded-lg">
           
            
            <div class="mb-6">
                <label for="utm-campaign" class="block text-sm font-medium text-gray-700">UTM campaign:</label>
                <div class="mt-1">
                    <input type="text" name="utm-campaign" id="utm-campaign" class="shadow-sm h-12 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                </div>
            </div>

            <div class="mb-6">
                <label for="utm-source" class="block text-sm font-medium text-gray-700">UTM source:</label>
                <div class="mt-1">
                    <input type="text" name="utm-source" id="utm-source" class="shadow-sm h-12 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                </div>
            </div>

            <div class="mb-6">
                <label for="utm-medium" class="block text-sm font-medium text-gray-700">UTM medium:</label>
                <div class="mt-1">
                    <input type="text" name="utm-medium" id="utm-medium" class="shadow-sm h-12 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                </div>
            </div>

            <div class="mb-6">
                <label for="utm-content" class="block text-sm font-medium text-gray-700">UTM content:</label>
                <div class="mt-1">
                    <input type="text" name="utm-content" id="utm-content" class="shadow-sm h-12 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                </div>
            </div>

            <div class="mb-6">
                <label for="utm-term" class="block text-sm font-medium text-gray-700">UTM term:</label>
                <div class="mt-1">
                    <input type="text" name="utm-term" id="utm-term" class="shadow-sm h-12 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                </div>
            </div>

            <div class="mb-6">
                <label for="extra-params" class="block text-sm font-medium text-gray-700">Extra params:</label>
                <div class="mt-1">
                    <textarea id="extra-params" name="extra-params" rows="4" class="shadow-sm focus:ring-purple-500 placeholder:p-3 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md rounded bg-white" placeholder="param=123&another=&quot;##|user.email|##&quot;"></textarea>
                </div>
            </div>

         
        </div>

        <div class="mt-5">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                Update Settings
            </button>
        </div>

        </div>

</body>
</html>