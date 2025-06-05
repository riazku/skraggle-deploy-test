<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
  </head>
  <body>
   <div class="container mx-auto p-4">

    <p class="text-[#3F3F3F] text-[16px] py-4">
  Auto import allows you to import data between devices.
</p>


  <!-- Tabs -->
  {{-- <div class="flex flex-wrap space-x-1 mb-6">
   
    <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
  
    Old Purchases
    </button>
   <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
   Auto Import
    </button>
      
  </div> --}}




<div class="flex flex-row gap-4">

    <div class="bg-[#EEEAFF] rounded-lg w-[50%] h-[400px] p-3">

        <div class="mt-1">
            <h3 class="text-[#3F3F3F]">Title</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none" placeholder="User email or ID"></textarea>
        </div>

             <div class="mt-1">
            <h3 class="text-[#3F3F3F]">File Name</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none" placeholder="Event Json"></textarea>
        </div>

             <div class="mt-1">
            <h3 class="text-[#3F3F3F]">Code</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[70px]  p-3 rounded-lg  resize-none" placeholder="Event Json"></textarea>
        </div>

        <button class="py-2 px-6 mt-2 text-white bg-[#551895] rounded-lg">Auto Data Import</button>

    </div>

        <div class="bg-[#EEEAFF] rounded-lg w-[50%] h-[370px] p-3">
        <h2 class="text-[#551895] text-[20px] font-semibold">Push Events into the System</h2>

 <!-- table -->

      <div class="overflow-x-auto -ml-1 mt-3">
        <table
          class="min-w-full border-separate bg-white border-spacing-y-0  rounded-2xl shadow-sm"
        >
          <thead class="overflow-hidden ">
            <tr class="bg-[#DDD7F5] mt-12 text-[#551895] text-left text-sm">
              <th class="px-4 py-5 rounded-l-2xl !rounded-b-none">
                <div class="flex items-center gap-2">
                  <input type="checkbox" />
                  <span class="font-semibold">Contacts (12,346)</span>
                 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
  <path d="M0.271365 5.63644C-0.0250978 5.4181 -0.0884257 5.00077 0.129918 4.7043C0.299512 4.47403 0.469143 4.25514 0.617924 4.0645C0.914934 3.68392 1.32382 3.17423 1.76805 2.66259C2.20941 2.15426 2.69877 1.62876 3.15563 1.22509C3.38329 1.02393 3.61859 0.838932 3.84804 0.700612C4.05919 0.573324 4.34932 0.433017 4.66674 0.433014C4.98416 0.433017 5.27431 0.573324 5.48545 0.700612C5.7149 0.838932 5.9502 1.02393 6.17787 1.22509C6.63473 1.62876 7.12409 2.15426 7.56544 2.66259C8.00968 3.17423 8.41856 3.68392 8.71557 4.0645C8.86435 4.25514 9.03398 4.47403 9.20358 4.7043C9.42192 5.00077 9.35859 5.4181 9.06213 5.63644C8.94296 5.72421 8.80425 5.76646 8.66679 5.76634L4.66674 5.76634L0.66671 5.76634C0.529246 5.76646 0.390537 5.72421 0.271365 5.63644Z" fill="#551895"/>
  <path d="M9.06238 8.56357C9.35884 8.78191 9.42217 9.19925 9.20382 9.49571C9.03423 9.72598 8.8646 9.94487 8.71582 10.1355C8.41881 10.5161 8.00992 11.0258 7.56569 11.5374C7.12433 12.0457 6.63497 12.5713 6.17811 12.9749C5.95045 13.1761 5.71515 13.3611 5.4857 13.4994C5.27455 13.6267 4.98442 13.767 4.667 13.767C4.34958 13.767 4.05943 13.6267 3.84829 13.4994C3.61884 13.3611 3.38354 13.1761 3.15587 12.9749C2.69901 12.5713 2.20965 12.0457 1.7683 11.5374C1.32406 11.0258 0.915178 10.5161 0.618168 10.1355C0.469387 9.94487 0.299756 9.72598 0.130161 9.49571C-0.0881814 9.19925 -0.0248536 8.78191 0.271608 8.56357C0.390781 8.4758 0.52949 8.43355 0.666954 8.43367L4.667 8.43367L8.66703 8.43367C8.80449 8.43355 8.9432 8.4758 9.06238 8.56357Z" fill="#CABCF8"/>
</svg>
                </div>
              </th>
              <th class="px-4 py-5 font-semibold rounded-r-2xl !rounded-b-none"><div class="flex items-center gap-2">
                  <span class="font-semibold">Email</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
  <path d="M0.939333 5.63644C0.642871 5.4181 0.579543 5.00077 0.797887 4.7043C0.967481 4.47403 1.13711 4.25514 1.28589 4.0645C1.5829 3.68392 1.99179 3.17423 2.43602 2.66259C2.87738 2.15426 3.36674 1.62876 3.8236 1.22509C4.05126 1.02393 4.28656 0.838932 4.51601 0.700612C4.72716 0.573324 5.01729 0.433017 5.33471 0.433014C5.65212 0.433017 5.94228 0.573324 6.15342 0.700612C6.38287 0.838932 6.61817 1.02393 6.84584 1.22509C7.3027 1.62876 7.79205 2.15426 8.23341 2.66259C8.67765 3.17423 9.08653 3.68392 9.38354 4.0645C9.53232 4.25514 9.70195 4.47403 9.87155 4.7043C10.0899 5.00077 10.0266 5.4181 9.7301 5.63644C9.61093 5.72421 9.47222 5.76646 9.33475 5.76634L5.33471 5.76634L1.33468 5.76634C1.19721 5.76646 1.05851 5.72421 0.939333 5.63644Z" fill="#CABCF8"/>
  <path d="M9.73034 8.56357C10.0268 8.78191 10.0901 9.19925 9.87179 9.49571C9.7022 9.72598 9.53257 9.94487 9.38379 10.1355C9.08677 10.5161 8.67789 11.0258 8.23366 11.5374C7.7923 12.0457 7.30294 12.5713 6.84608 12.9749C6.61841 13.1761 6.38311 13.3611 6.15367 13.4994C5.94252 13.6267 5.65239 13.767 5.33497 13.767C5.01755 13.767 4.7274 13.6267 4.51625 13.4994C4.28681 13.3611 4.05151 13.1761 3.82384 12.9749C3.36698 12.5713 2.87762 12.0457 2.43626 11.5374C1.99203 11.0258 1.58315 10.5161 1.28614 10.1355C1.13736 9.94487 0.967725 9.72598 0.79813 9.49571C0.579787 9.19925 0.643115 8.78191 0.939577 8.56357C1.05875 8.4758 1.19746 8.43355 1.33492 8.43367L5.33496 8.43367L9.335 8.43367C9.47246 8.43355 9.61117 8.4758 9.73034 8.56357Z" fill="#CABCF8"/>
</svg>
                </div></th>
              
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700">
            <tr class="bg-white">
              <td class="px-4 py-5">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>
           
            </tr>
   <tr class="bg-white">
              <td class="px-4 py-5 ">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>
           
            </tr>
               <tr class="bg-white">
              <td class="px-4 py-5">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600 ">jason@gmail.com</td>
           
            </tr>
               <tr class="bg-white">
              <td class="px-4 py-5 rounded-l-2xl">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600 rounded-r-2xl">jason@gmail.com</td>
           
            </tr>
       
          </tbody>
        </table>
      </div>

    </div>
</div>


            </div>

  </body>
</html>
