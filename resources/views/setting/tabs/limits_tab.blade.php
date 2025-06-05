<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
  </head>
  <body>
   <div class="container mx-auto p-6">
  <!-- Tabs -->
  {{-- <div class="flex flex-wrap space-x-1 mb-6">

   <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
      Attributes
    </button>
    
      
     <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
       Opt In

    </button>
     <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
     
       Opt In
    </button>

  </div> --}}


  <div class="flex justify-between  items-center gap-2 mb-4">
    <h3 class="text-[#3F3F3F] font-semibold text-[15px]">You don’t want to spam your users to many messages. Here you can set limits.</h3>
  </div>

 <div class="bg-white p-3 rounded-lg border border-gray-300 shadow">
            <!-- Header and Search -->
            <div class="flex justify-end items-center  mb-6 p-2">
                 <div class="flex items-center !flex-wrap md:gap-0 gap-2 space-x-4">
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


            <div class="grid md:grid-cols-2 grid-cols-1 gap-3">

              <div class="bg-[#EEEAFF] rounded-lg p-3">
                <h1 class="text-[#551895] text-[20px] font-medium">Campaign Types</h1>
                <p class="text-[#3F3F3F] p-1 mt-2">
                  This limits number of messages a user receives for each campaign type per day. A message can be email, push or SMS.
                </p>

         <div class="flex flex-col gap-2 w-[55%] mt-4">
  <!-- Row 1 -->
  <div class="flex flex-row gap-2">
    <button class="w-full border bg-white text-[#B2B9C7] px-4 h-[50px] rounded-lg">Newsletter</button>
    <button class="w-full border bg-white text-[#B2B9C7] px-6 h-[50px]   rounded-lg">Max 2 in 24hrs</button>
  </div>

  <!-- Row 2 -->
  <div class="flex flex-row gap-2">
    <button class="w-full border bg-white text-[#B2B9C7] px-4 py-2 rounded-lg">Newsletter</button>
    <button class="w-full border bg-white text-[#B2B9C7] px-6 py-2 rounded-lg">Max 2 in 24hrs</button>
  </div>

  <!-- Row 3 -->
  <div class="flex flex-row gap-2">
    <button class="w-full border bg-white text-[#B2B9C7] px-4 py-2 rounded-lg">Newsletter</button>
    <button class="w-full border bg-white text-[#B2B9C7] px-6 py-2 rounded-lg">Max 2 in 24hrs</button>
  </div>
</div>


 
      <button class="bg-[#551895] text-white rounded-md px-5 py-3 mt-4  ">Copy to My Segments </button>

              </div>


              <div class="bg-[#EEEAFF] rounded-lg p-3">
                <div class="flex flex-col justify-between items-start w-full h-full">
            
                  <div>
                    <h1 class="text-[#551895] text-[20px] font-medium">Campaign Types</h1>
                    <p class="text-[#3F3F3F] p-1 mt-2">If a campaign has multiple tags with limits, the longest limit will apply. 0 days limits will be ignored.                </p>
                  <p class="text-[#3F3F3F] p-1 -mt-2"><span class="font-semibold">For example</span> : tag1 has 3 days limit and tag2 has 7 days limit. A campaign with both these tags will be limited by the 7 days limit (tag2).</p>
                </div>

                <div>
                  <p class="text-[#3F3F3F] text-[14px] ml-2">You have no tags added. Add tags for each campaign and they will show up here.</p>
                </div>
              </div>

              </div>

            </div>


            </div>


  </body>
</html>
