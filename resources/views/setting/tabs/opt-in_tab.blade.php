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
    
      <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
     
       Opt In
    </button>
     <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
     Limits
    </button>
  </div> --}}


  <div class="flex justify-between  items-center gap-2 mb-4">
    <h3 class="text-[#3F3F3F] font-semibold text-[18px]">When new user join your system they will automatically get those default values.</h3>
  </div>


  <div>
       <div class="flex justify-start items-center gap-2 mt-6">
          <div class="rounded-md border border-gray-300  justify-center items-center px-3 p-2 py-2 flex gap-2 w-[130px]">
            <input type="text" name="" id="" placeholder="Attribute" class="outline-none border-none w-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
  <path d="M9.06213 0.96332C9.35859 1.18166 9.42192 1.599 9.20358 1.89546C9.03398 2.12573 8.86435 2.34462 8.71557 2.53526C8.41856 2.91584 8.00968 3.42553 7.56544 3.93717C7.12409 4.4455 6.63473 4.97101 6.17787 5.37467C5.9502 5.57583 5.7149 5.76083 5.48545 5.89915C5.27431 6.02644 4.98418 6.16675 4.66676 6.16675C4.34934 6.16675 4.05919 6.02644 3.84804 5.89915C3.61859 5.76083 3.38329 5.57583 3.15563 5.37467C2.69877 4.97101 2.20941 4.4455 1.76805 3.93717C1.32382 3.42553 0.914934 2.91584 0.617924 2.53526C0.469143 2.34462 0.299512 2.12573 0.129917 1.89546C-0.0884256 1.599 -0.0250978 1.18166 0.271364 0.96332C0.390537 0.87555 0.529245 0.833302 0.66671 0.833418L4.66675 0.833418L8.66679 0.833418C8.80425 0.833302 8.94296 0.87555 9.06213 0.96332Z" fill="#B2B9C7"/>
</svg>
          </div>
        <span class="text-[#B2B9C7]">=</span>
        <div class="rounded-md border border-gray-300  justify-center items-center px-3 p-2 py-2 flex gap-2 w-[160px]">
            <input type="text" name="" id=""  class="outline-none border-none w-full">
         
          </div>
          <div class="rounded-md border border-gray-300  justify-center items-center px-3 p-2 py-2 flex gap-2 w-[80px]">
            <input type="text" name="" id="" placeholder="And" class="outline-none border-none w-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
  <path d="M9.06213 0.96332C9.35859 1.18166 9.42192 1.599 9.20358 1.89546C9.03398 2.12573 8.86435 2.34462 8.71557 2.53526C8.41856 2.91584 8.00968 3.42553 7.56544 3.93717C7.12409 4.4455 6.63473 4.97101 6.17787 5.37467C5.9502 5.57583 5.7149 5.76083 5.48545 5.89915C5.27431 6.02644 4.98418 6.16675 4.66676 6.16675C4.34934 6.16675 4.05919 6.02644 3.84804 5.89915C3.61859 5.76083 3.38329 5.57583 3.15563 5.37467C2.69877 4.97101 2.20941 4.4455 1.76805 3.93717C1.32382 3.42553 0.914934 2.91584 0.617924 2.53526C0.469143 2.34462 0.299512 2.12573 0.129917 1.89546C-0.0884256 1.599 -0.0250978 1.18166 0.271364 0.96332C0.390537 0.87555 0.529245 0.833302 0.66671 0.833418L4.66675 0.833418L8.66679 0.833418C8.80425 0.833302 8.94296 0.87555 9.06213 0.96332Z" fill="#B2B9C7"/>
</svg>
          </div>
        </div>

  </div>

      <button class="bg-[#551895] text-white rounded-md px-5 py-3 mt-8">Update Default Attributes </button>

 



<div class="bg-[#EEEAFF] border border-[#D6CEFA] w-full md:w-[27%] flex items-center gap-4 p-2 mt-4 rounded-md">
  <div class="border border-[#CABCF8] p-[3px] rounded-full w-6 h-6 flex items-center justify-center">
    <span class="bg-[#551895] block rounded-full w-24 h-4"></span>
  </div>
  <span class="text-sm text-[#3F3F3F]">
  Auto subscribe customers to the main list
  </span>
</div>


  </body>
</html>
