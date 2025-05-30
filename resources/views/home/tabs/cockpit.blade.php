<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Document</title>
  </head>
  <body>


    <div class="container bg-[#FAFAFA] rounded-md mx-auto p-6">
        <!-- Overview Header -->
         <!-- Overview Header -->
         <div class="flex gap-x-5 items-center mb-8 pb-4 border-b border-gray-200">
            <h1 class="text-3xl font-bold">Overview</h1>
            <div class="flex items-center space-x-4">
                <div class="flex items-center bg-gray-100 rounded-md px-3 py-1">
                    <input type="date" 
                        class="bg-gray-100 rounded-md px-3 py-1 text-sm w-32 appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500"
                        value="{{ date('Y-m-d') }}"
                    >
                </div>
                
                <span class="text-sm text-gray-600">To</span>
                
                <div class="flex items-center bg-gray-100 rounded-md px-3 py-1">
                    <input 
                        type="date" 
                        class="bg-gray-100 rounded-md px-3 py-1 text-sm w-32 appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-500"
                        value="{{ date('Y-m-d') }}"
                    >
                </div>
            </div>
        </div>

        <!-- Info Banner -->
        <div class="bg-[#FCF8E3] w-fit border rounded-lg border-[#E1D7C5] text-[#8A6D3B] p-2 mb-6" role="alert">
            <p>This feature is experimental. Please provide us feedback on how to improve it.</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4 mb-8">
            <button class="bg-[#551895] text-white px-6 py-2 rounded-lg hover:bg-purple-800">Give me ideas for campaigns</button>
            <button class="bg-[#551895] text-white px-6 py-2 rounded-lg hover:bg-purple-800">What was best sold last year?</button>
        </div>

        <!-- Generate Email Content Section -->
        <h2 class="text-xl font-medium mb-4">Generate Email Content</h2>
        <div class="border border-gray-300 bg-white rounded-lg p-6">

            <div class="min-h-72 mb-10 "><p class="text-center text-xs">Learn how to get out of our software</p></div> <!-- Placeholder for content area -->
            <div class="flex items-center border border-gray-200 rounded-xl px-4 py-2 max-w-3xl mx-auto">
                <input 
                  type="text" 
                  placeholder="Write a message..." 
                  class="flex-grow outline-none text-gray-500 placeholder-gray-400 bg-transparent"
                />
                <button 
                  class="bg-[#551895] text-white font-semibold px-4 py-2 rounded-xl ml-2  "
                >
                  Generate Content
                </button>
              </div>
              
        </div>
    </div>
 
</body>
</html>