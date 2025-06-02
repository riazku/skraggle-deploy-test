<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
       
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
           Search Terms
          
         
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Items
        </button>
         <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
        Categories
        </button>
         
      </div> --}}

      <div class="grid grid-cols-2 gap-2 mt-5 w-full">

        <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Viewed</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
    
    
          <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Added to Cart</h4>
          <div class="flex justify-start items-center gap-4">
            <h1 class="text-[#551895] !text-[44px] font-semibold">00.0</h1>
            <h6
              class="bg-[#DAD2FB] rounded-md text-[#551895] px-3 p-[1px] mt-2"
            >
              00.0 (%)
            </h6>
          </div>
        </div>
             <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Wish listed</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
            <div class="bg-[#EEEAFF] rounded-md p-3 ">
          <h4 class="text-[#551895] text-[16px]">Top Purchased</h4>
          <div class="flex justify-start items-center gap-4">
            <h1 class="text-[#551895] !text-[44px] font-semibold">00.0</h1>
            <h6
              class="bg-[#DAD2FB] rounded-md text-[#551895] px-3 p-[1px] mt-2"
            >
              00.0 (%)
            </h6>
          </div>
        </div>
      </div>


      </div>
</body>
</html>