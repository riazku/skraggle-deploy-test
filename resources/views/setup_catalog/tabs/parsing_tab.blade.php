<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Parsing Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section>
    <div class="flex h-screen">
      
    
    


    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
    
    <!-- Search and Status Section -->
    

    <!-- Cards Section -->
    <div class="mx-10 border rounded-lg">

      <div class="m-10">
        <div class="flex items-center justify-end space-x-4">
            <div class="relative">
                <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 border-b text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                <svg class="absolute left-3 top-2.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <button class="px-4 py-2 rounded-lg text-sm font-medium bg-[#CABCF8]">Running</button>
            <button class="text-gray-600 px-4 py-2 rounded-lg text-sm font-medium border">Paused</button>
        </div>
    </div>
        <div class="p-6 flex gap-4">

          
            <!-- Parsing History Card -->
            <div class="w-3/6 bg-[#EEEAFF] p-4 rounded">
            

          <div class="flex justify-between mb-2">
            <strong class="text-[#551895]">Parsing History</strong>
            <button class="bg-[#551895] text-white px-3 py-1 rounded text-xs p-10">Parse Now</button>
          </div>


<div class="bg-white rounded  text-sm ">
 <div class="flex justify-between items-center pb-5 font-semibold border-b pb-1 mb-1 bg-[#DDD7F5] p-4 rounded-md">
  <span>Contacts (12,344)</span>
  <span>Email</span>
</div>

  <!-- Rows -->
  <div class="flex justify-between py-2">
    <label class="px-2 py-1 flex items-center"><input type="checkbox" class="mr-1" /> Group-DB303GF</label>
    <span class="p-3">jason@gmail.com</span>
  </div>
  <div class="flex justify-between py-3">
    <label class="px-2 py-1 flex items-center"><input type="checkbox" class="mr-1" /> Group-DB303GF</label>
    <span class="p-3">jason@gmail.com</span>
  </div>
  <div class="flex justify-between py-3">
    <label class="px-2 py-1 flex items-center"><input type="checkbox" class="mr-1" /> Group-DB303GF</label>
    <span class="p-3">jason@gmail.com</span>
  </div>
  <div class="flex justify-between py-3">
    <label class="px-2 py-1 flex items-center"><input type="checkbox" class="mr-1" /> Group-DB303GF</label>
    <span class="p-3">jason@gmail.com</span>
  </div>
</div>
            <h2 class="text-[#551895] font-medium mt-5">Parsing Errors</h2>
          <button class="mt-3 text-xs text-gray-600 mt-4 border p-2">No errors for the last feed pars</button>
        </div>

        <!-- Recurring Parsing -->
        <div class="w-1/2 bg-[#EEEAFF] p-4 rounded space-y-4">
          <div >
            <div class="font-bold mb-1 text-[#551895]">Recurring Parsing</div>
            <div class="text-xs text-gray-600 mb-1 mt-4">Repetitive feed parsing</div>
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

          <div>
            <div class="font-semibold mb-1 flex justify-between">Product feed URL <button class="text-xs text-gray-500 border p-2">Edit</button></div>
            <input type="text" placeholder="Enter public accessible URL" class="w-full h-20 p-2 text-xs rounded border" />
            <button class="bg-white border px-2 py-1 text-xs rounded mt-1">Upload</button>
          </div>

       <!-- Feed Source -->
<div>
  <div class="font-semibold mb-1 flex justify-between">
    <div>
      <h2 class="text-[#551895] ">Feed Source</h2>
      <p class="text-sm font-normal text-gray-600 mt-4">Pagination. Items per page</p>
    </div>
    <button class="text-xs text-gray-500 border p-2 h-fit">Edit</button>
  </div>
  <input type="number" placeholder="Items per page" class="w-full h-20 p-2 text-xs rounded border mt-4" />
</div>

<!-- Feed Params -->
<div>
  <div class="font-semibold mb-1 flex justify-between">
    <div>
      <h2 class="text-[#551895]">Feed Params</h2>
      <p class="text-sm font-normal text-gray-600 mt-4">File encoding. By default this will be UTF-8</p>
    </div>
    <button class="text-xs text-gray-500 border p-2 h-fit">Edit</button>
  </div>
  <input type="text" placeholder="UTF-8" class="w-full h-20 p-2 text-xs rounded border mt-4" />
</div>

        </div>
      </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>