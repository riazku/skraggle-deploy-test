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
            
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">JS Advances</button>


            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">UTM Tracking</button>

 

        </div>      --}}


          <!-- Settings Content -->
          <div class="mt-8 p-6 bg-[#EEEAFF] rounded-lg">
            <div class="mb-6">
                <label for="c15-selectors" class="block text-sm font-medium text-gray-700">C15 Selectors for sedicesart addowishlist buttons</label>
                <div class="mt-1 items-center">
                    <input type="text" name="c15-selectors" id="c15-selectors" class="shadow-sm h-16 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                    <p class="text-right text-sm mt-2 text-gray-500">Please enter a valid JSON format.</p>
                </div>
            </div>

            <div class="mb-6">
                <label for="custom-javascript" class="block text-sm font-medium text-gray-700">Custom Javascript. Runs on every page load.</label>
                <div class="mt-1">
                    <textarea id="custom-javascript" name="custom-javascript" rows="8" class="shadow-sm focus:ring-purple-500 placeholder:p-3 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md rounded bg-white" placeholder="User email or ID"></textarea>
                </div>
                <p class="mt-2 text-right text-sm text-gray-500">Code will be evaluated at running time. Make sure your code is valid</p>
            </div>

        
        </div>

        <div class="mt-3">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                Update Settings
            </button>
        </div>



        </div>

      
    </div>

</body>
</html>