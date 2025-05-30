<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Activity Overview</title>
  </head>
 

  <body>
    <div class="w-full h-screen z-10">
      <div class="flex gap-10">
     


        <div class="w-[100%]">
    


          <div class="bg-[#FAFAFA] p-3 rounded-lg">
            <div class="flex flex-wrap gap-2 mt-1">
              <h1 class="text-[#3F3F3F] font-bold text-[23px]">
                Activity Overview
              </h1>
              <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
                <!-- Replace existing button with new date input -->
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

            <div class="flex items-center flex-wrap md:gap-10 gap-3 mt-6">
              <h3 class="text-[#3F3F3F] font-medium text-[21px]">
                E-Commerce Activity
              </h3>
              <button
                class="bg-[#CABCF8] text-[#551895] px-3 p-1 rounded-md font-semibold"
              >
                View Report
              </button>
            </div>

            <!-- Container Grid Cards -->
            <div class="grid md:grid-cols-2   grid-cols-1 gap-2 space-y-2 mt-5">
              <!-- Conversion -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Conversion vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Revenue vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Revenue vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Shopping Carts vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Shopping Carts vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Average Order Value vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Average Order Value vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Socond -->

            <div class="flex items-center gap-10 mt-8">
              <h3 class="text-[#3F3F3F] font-medium text-[21px]">Recipients</h3>
              <button
                class="bg-[#CABCF8] text-[#551895] px-3 p-1 rounded-md font-semibold"
              >
                View Report
              </button>
            </div>

            <!-- Container Grid Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-2 space-y-2 mt-5">
              <!-- Main List vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Main List vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Push Subscribers vs.   -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Push Subscribers vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Shopping Carts vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Shopping Carts vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Average Order Value vs.  -->
              <div class="border-1 border-[#CAD7EC] rounded-2xl h-[180px] p-3">
                <div class="flex items-center gap-2">
                  <h1 class="text-[#3F3F3F] text-[15px] font-semibold">
                    Average Order Value vs.
                  </h1>
                  <div
                    class="flex justify-center items-center gap-2 text-[#B2B9C7]"
                  >
                    <h6>12.5.2024</h6>
                    -
                    <h6>12/6/2024</h6>
                  </div>
                </div>

                <div class="flex mt-2 gap-2 justify-start items-start">
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">175</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                  <div class="w-[50%] h-full bg-[#EEEAFF] rounded-md gap-2 p-3">
                    <h2 class="text-[#551895]">Total</h2>
                    <div class="flex justify-start mt-6 items-center gap-3">
                      <h1 class="text-[35px] text-[#551895] font-bold">34</h1>
                      <button
                        class="bg-[#DAD2FB] text-[#551895] p-1 rounded-md px-4"
                      >
                        76 (%)
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <div>
            <h2 class="text-[#3F3F3F] font-medium text-[20px]">Running Compagaigns</h2>
            <div class="grid grid-cols-2 justify-center  items-center  gap-6">

        
         
        <div class="overflow-x-auto  bg-[#FFFFFF] !rounded-lg">
  <table class="min-w-full border-separate  !rounded-lg border-spacing-y-2">
    <thead>
      <tr class="bg-[#DDD7F5] text-[#551895] text-purple-700 text-left text-sm">
        <th class="px-4 py-4 flex gap-1 rounded-lg">
          <input type="checkbox" />
          <span class="ml-2 font-semibold ">Campaign Title </span><img src="./assets/img/arrow.svg" alt="">
        </th>
        <th class="px-4 py-2 font-semibold">Type</th>
        <th class="px-4 py-2 font-semibold">Status</th>
        <th class="px-4 py-2 font-semibold">Actions</th>
      </tr>
    </thead>
    <tbody class="text-sm text-gray-700 ">
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-medium">Google Inc.</td>
      </tr>
    <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="overflow-x-auto  bg-[#FFFFFF] !rounded-lg">
  <table class="min-w-full border-separate  !rounded-lg border-spacing-y-2">
    <thead>
      <tr class="bg-[#DDD7F5] text-[#551895] text-purple-700 text-left text-sm">
        <th class="px-4 py-4 flex gap-1 rounded-lg">
          <input type="checkbox" />
          <span class="ml-2 font-semibold ">Campaign Title </span><img src="./assets/img/arrow.svg" alt="">
        </th>
        <th class="px-4 py-2 font-semibold">Type</th>
        <th class="px-4 py-2 font-semibold">Status</th>
        <th class="px-4 py-2 font-semibold">Actions</th>
      </tr>
    </thead>
    <tbody class="text-sm text-gray-700 ">
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-medium">Google Inc.</td>
      </tr>
    <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
      <tr class="bg-white shadow rounded-lg">
        <td class="px-4 py-4 flex items-center">
          <input type="checkbox" />
          <span class="ml-2">Group-DB303GF</span>
        </td>
        <td class="px-4 py-2 text-purple-700 font-semibold">Survey</td>
        <td class="px-4 py-2 text-gray-500">22/10/2022</td>
        <td class="px-4 py-2 font-semibold">Google Inc.</td>
      </tr>
    </tbody>
  </table>
</div>

   </div>

          </div>


          </div>

        </div>
      </div>

    </div>
  </body>
</html>