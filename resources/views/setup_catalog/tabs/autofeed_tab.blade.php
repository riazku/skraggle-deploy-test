<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Auto Feed</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

    <!-- Main Content -->
    <main class="flex-1 bg-white px-8 py-6">



      <!-- Feed Settings -->
      <div class="bg-white rounded p-6 space-y-6 w-full">
        
        <!-- Auto Generated Toggle -->
<div>
           <div >
<p class="text-lg text-gray-600 mb-1 mt-4">Auto generated feed</p>
           <div class="flex gap-4 items-center mt-5">
  <label class="flex items-center gap-2">
    <input type="radio" class="w-[25px] h-[25px] accent-purple-700" name="repeat" checked />
    Yes
  </label>
  <label class="flex items-center gap-2">
    <input type="radio" class="w-[25px] h-[25px] accent-purple-700" name="repeat" />
    No
  </label>
</div>

          </div>
    <label class="block font-semibold mb-2 mt-10">Required attributes of insert</label>
  <div class="w-full max-w-4xl p-2 bg-white border border-gray-300 rounded-md space-y-2">

  <div class="flex items-center gap-4">
    <input
      type="text"
      placeholder="Enter public accessible URL"
      class="flex-grow px-4 py-2  rounded-md text-base focus:outline-none"
    />
    <button
      class="flex items-center px-5 py-2 text-base text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 transition">
      Upload
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M12 19V5" />
        <polyline points="5 12 12 5 19 12" />
        <rect x="5" y="19" width="14" height="2" rx="1" />
      </svg>
    </button>
  </div>
</div>


  </div>

  <!-- Input 2 -->
  <div>
    <label class="block font-semibold mb-2">Attributes for update</label>
  <div class="w-full max-w-4xl p-2 bg-white border border-gray-300 rounded-md space-y-2">

  <div class="flex items-center gap-4">
    <input
      type="text"
      placeholder="Enter public accessible URL"
      class="flex-grow px-4 py-2  rounded-md text-base focus:outline-none"
    />
    <button
      class="flex items-center px-5 py-2 text-base text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 transition">
      Upload
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M12 19V5" />
        <polyline points="5 12 12 5 19 12" />
        <rect x="5" y="19" width="14" height="2" rx="1" />
      </svg>
    </button>
  </div>
</div>
  </div>

  <!-- Input 3 -->
  <div>
    <label class="block font-semibold mb-2">Prefix for Images & URL</label>
   <div class="w-full max-w-4xl p-2 bg-white border border-gray-300 rounded-md space-y-2">

  <div class="flex items-center gap-4">
    <input
      type="text"
      placeholder="Enter public accessible URL"
      class="flex-grow px-4 py-2  rounded-md text-base focus:outline-none"
    />
    <button
      class="flex items-center px-5 py-2 text-base text-gray-700 border border-gray-300 rounded-md hover:bg-gray-100 transition">
      Upload
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-2" fill="none"
        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path d="M12 19V5" />
        <polyline points="5 12 12 5 19 12" />
        <rect x="5" y="19" width="14" height="2" rx="1" />
      </svg>
    </button>
  </div>
</div>
  </div>

        <!-- Save/Delete Buttons -->
        <div class="flex space-x-4 main12">
          <button class="text-white px-4 py-2 rounded text-sm bg-purple-700">Save</button>
          <button class="border px-4 py-2 rounded text-sm">Delete all items</button>
        </div>
      </div>
    </main>



  </body>
</html>