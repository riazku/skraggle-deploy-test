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




 <div class="bg-white p-3 rounded-lg border border-gray-300 shadow ">
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
                    <button class="border-gray-200 border text-gray-600 px-3 py-1 font-medium rounded-md">Paused</button>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2">

              <div class="bg-[#EEEAFF] p-4 rounded-lg">
              <h1 class="text-[#551895] text-[18px] font-semibold">
                Install Webpush Files
              </h1>
              <div class="flex gap-2 items-center mt-5">
                <button class="text-[#3F3F3F] border-[#D6CEFA] border py-2 px-2 rounded-lg">Download Files</button>

                <button class="text-[#3F3F3F] border-[#D6CEFA] border py-2 px-2 rounded-lg">Validate Files</button>
              </div>

             
              <div>

<div class="flex justify-between items-center gap-2 mt-6">
  <h2 class="text-[#3F3F3F]">File location </h2>
   <button class="border border-[#CFD5DF] text-[#3F3F3F] px-4 py-2 rounded-lg">Edit</button>

</div>

<div class="bg-white rounded-lg px-2 py-3 flex justify-start items-start mt-3">
  <input type="text" name="" id="" class="outline-none border-none w-[80%]" placeholder="Enter public accessible URL">
<button class="border border-[#CFD5DF] px-2 py-1 gap-2 flex items-center justify-center rounded-lg text-[#3F3F3F]">Uplaod<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
  <path d="M11.5 16.177V7.52701L9.17 9.85701L8.462 9.13901L12 5.60001L15.539 9.13901L14.831 9.85801L12.5 7.52701V16.177H11.5ZM6.616 19.6C6.15533 19.6 5.771 19.446 5.463 19.138C5.155 18.83 5.00067 18.4453 5 17.984V15.561H6V17.984C6 18.138 6.064 18.2793 6.192 18.408C6.32 18.5367 6.461 18.6007 6.615 18.6H17.385C17.5383 18.6 17.6793 18.536 17.808 18.408C17.9367 18.28 18.0007 18.1387 18 17.984V15.561H19V17.984C19 18.4447 18.846 18.829 18.538 19.137C18.23 19.445 17.8453 19.5993 17.384 19.6H6.616Z" fill="black"/>
</svg></button>
</div>
              </div>

              
                 <h1 class="text-[#551895] text-[18px] mt-3 font-semibold">
             Ask for Permission
              </h1>
              <div class="flex gap-2 mt-4">

  <div class="flex gap-2 ">
   <div class="border border-[#CABCF8] p-[3px] rounded-full w-6 h-6 flex items-center justify-center">
  </div>No
</div>


<div class="flex gap-2 ">
  <div class="border border-[#CABCF8] p-[3px] rounded-full w-6 h-6 flex items-center justify-center">
    <span class="bg-[#551895] block rounded-full w-24 h-4"></span>
  </div>Yes
</div>
</div>

<div class="flex flex-col gap-4 w-[40%] mt-3">
  <button class="bg-[#EEEAFF] border-[#D6CEFA] border p-2 px-2 text-[#3F3F3F] rounded-lg font-semibold ">Permission message widget.</button>

  <button class="bg-[#EEEAFF] border-[#D6CEFA] border p-2 px-2 text-[#3F3F3F] rounded-lg font-semibold">Welcome notification</button>
</div>



              </div>

              <div class="bg-[#EEEAFF] p-4 rounded-lg h-[190px]">

              <h1 class="text-[#551895] text-[18px] font-semibold">
                Preview
              </h1>
             
              <div class="flex justify-center items-center flex-col bg-white rounded-lg h-[110px] p-3 gap-2 mt-6 mb-4">

                <h5 class="text-[#292929]"> Would you like to receive notification from us?</h5>
                <div class="flex justify-center items-center gap-2 mt-4">
                  <button class="border border-[#CFD5DF] py-1 px-6 rounded-lg">No</button>
                  <button class="bg-[#551895]  text-white py-1 border-none px-6 rounded-lg">Yes</button>
                </div>
              </div>

             


              </div>

              
                 
       


              </div>


            </div>

            
            <button class="bg-[#551895] border-[#D6CEFA] border p-2 px-8 text-white rounded-lg mt-4">Save Setting</button>
          </div>
            </div>

  </body>
</html>
