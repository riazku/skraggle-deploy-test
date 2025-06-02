

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
    
         Manually Add Emails
    </button>
    <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
     Upload CSV
    </button>

  </div> --}}


<div class="bg-[#EEEAFF] border border-[#D6CEFA] w-full md:w-[45%] flex items-center gap-4 p-4 rounded-md">
  <div class="border border-[#CABCF8] p-[3px] rounded-full w-6 h-6 flex items-center justify-center">
    <span class="bg-[#551895] block rounded-full w-24 h-4"></span>
  </div>
  <span class="text-sm text-[#3F3F3F]">
    I confirm this is not a purchased list. I have the rights to contact these emails.
  </span>
</div>


  <!-- Email Input Section -->
  <div>
<div class="w-full flex flex-col md:flex-row justify-between items-start gap-4">
  <div class="w-full md:w-[70%]">
    <label for="title" class="block text-sm text-[#3F3F3F] mt-5">Import Emails</label>
    
    <!-- Container with gap removed -->
    <div class="w-full flex flex-col md:flex-row justify-start items-start gap-4 mt-2 ">
      
      <!-- Left: Drag and Drop Box -->
      <div class="flex border border-[#B2B9C7] border-dashed bg-[#F6F6F6] rounded-lg justify-center items-center w-full md:w-[50%] h-[180px] p-4">
        <div class="flex flex-col justify-center items-center gap-2 text-center">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
            <g opacity="0.9">
              <path d="M19.6484 14.9993H15.5M15.5 14.9993H11.3516M15.5 14.9993V19.1478M15.5 14.9993L15.5 10.8509M26.5625 15C26.5625 21.1097 21.6097 26.0625 15.5 26.0625C9.39035 26.0625 4.4375 21.1097 4.4375 15C4.4375 8.89035 9.39035 3.9375 15.5 3.9375C21.6097 3.9375 26.5625 8.89035 26.5625 15Z" stroke="#CABCF8" stroke-width="2" stroke-linecap="round"/>
            </g>
          </svg>
          <!-- Text -->
          <h3 class="font-semibold text-[#3F3F3F]">Drag and drop files</h3>
          <!-- Options -->
          <div class="text-[#3F3F3F] flex flex-wrap justify-center items-center gap-2 text-sm">
            <span>Or</span>
            <button class="px-2 py-1 border border-[#CFD5DF] rounded-md">Choose a file</button>
            <span>to upload contacts</span>
          </div>
        </div>
      </div>

      <!-- Right: Email Instructions -->
      <div class="bg-[#F6F6F6] text-[#3F3F3F] w-full md:w-[30%] py-2 p-2  rounded-md text-sm font-medium">
        Please make sure CSV file has header lines with column names
      </div>
    </div>
  </div>

  <!-- Edit Button -->
  <button class="text-sm text-gray-600 border border-gray-300 rounded-md px-2 w-full md:w-[100px] py-2 hover:bg-gray-100 font-medium">
    Edit Content
  </button>
</div>


    <div class="mt-5">
              <label class="block text-sm text-gray-700">File encoding</label>
          <div class="mt-1 flex flex-col md:flex-row flex-wrap gap-y-4  justify-between items-center">
        <div class="flex justify-start items-center w-full md:w-[60%]  p-2  rounded-md  border-b border-gray-300">
          <input type="text" placeholder="" class="w-full px-2 outline-none" />
          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
  <path d="M9.72864 0.129824C10.0251 0.348167 10.0884 0.7655 9.87008 1.06196C9.70049 1.29223 9.53086 1.51113 9.38208 1.70177C9.08507 2.08235 8.67618 2.59203 8.23195 3.10367C7.79059 3.612 7.30123 4.13751 6.84437 4.54118C6.61671 4.74234 6.38141 4.92733 6.15196 5.06565C5.94081 5.19294 5.65068 5.33325 5.33326 5.33325C5.01584 5.33325 4.72569 5.19294 4.51455 5.06565C4.2851 4.92733 4.0498 4.74234 3.82213 4.54118C3.36527 4.13751 2.87591 3.612 2.43456 3.10367C1.99032 2.59203 1.58144 2.08235 1.28443 1.70177C1.13565 1.51112 0.966016 1.29223 0.796421 1.06196C0.578078 0.765499 0.641406 0.348167 0.937868 0.129824C1.05704 0.0420541 1.19575 -0.000193701 1.33321 -7.83046e-05L5.33326 -7.82569e-05L9.33329 -7.82092e-05C9.47075 -0.000193602 9.60946 0.0420542 9.72864 0.129824Z" fill="#B2B9C7"/>
</svg>
        </div>
        <button class="text-sm text-gray-600 border border-gray-300 rounded-md px-2 w-full md:w-[100px] py-2 hover:bg-gray-100">
          Edit Content
        </button>
      </div>    
    </div>

  </div>

  <!-- User Attributes -->
  <div>
    <h4 class="text-[#3F3F3F] font-semibold mt-4">User Attributes</h4>

    <!-- List Update -->
    <div class="mb-2 mt-4">
      <label class="block text-sm text-gray-700">List Update</label>
      <div class="mt-1 flex flex-col md:flex-row flex-wrap gap-y-4  justify-between items-center">
        <div class="flex justify-start items-center w-full md:w-[60%]  p-2  rounded-md border border-gray-300">
          <input type="text" placeholder="Ignore list status" class="w-full px-2 outline-none" />
          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
  <path d="M9.72864 0.129824C10.0251 0.348167 10.0884 0.7655 9.87008 1.06196C9.70049 1.29223 9.53086 1.51113 9.38208 1.70177C9.08507 2.08235 8.67618 2.59203 8.23195 3.10367C7.79059 3.612 7.30123 4.13751 6.84437 4.54118C6.61671 4.74234 6.38141 4.92733 6.15196 5.06565C5.94081 5.19294 5.65068 5.33325 5.33326 5.33325C5.01584 5.33325 4.72569 5.19294 4.51455 5.06565C4.2851 4.92733 4.0498 4.74234 3.82213 4.54118C3.36527 4.13751 2.87591 3.612 2.43456 3.10367C1.99032 2.59203 1.58144 2.08235 1.28443 1.70177C1.13565 1.51112 0.966016 1.29223 0.796421 1.06196C0.578078 0.765499 0.641406 0.348167 0.937868 0.129824C1.05704 0.0420541 1.19575 -0.000193701 1.33321 -7.83046e-05L5.33326 -7.82569e-05L9.33329 -7.82092e-05C9.47075 -0.000193602 9.60946 0.0420542 9.72864 0.129824Z" fill="#B2B9C7"/>
</svg>
        </div>
        <button class="text-sm text-gray-600 border border-gray-300 rounded-md px-2 w-full md:w-[100px] py-2 hover:bg-gray-100">
          Edit Content
        </button>
      </div>
    </div>

    <!-- Update Attributes -->
    <div class="mb-2 mt-4">
      <label class="block text-sm text-gray-700">Update Attributes for Users</label>
      <div class="mt-1 flex flex-col md:flex-row flex-wrap gap-y-4 justify-between items-center">
        <div class="flex justify-start items-center w-full md:w-[60%] px-2 rounded-md border border-gray-300">
          <input type="text" placeholder="Select Existing Sets" class="w-full p-2 outline-none" />
<svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
  <path d="M9.72864 0.129824C10.0251 0.348167 10.0884 0.7655 9.87008 1.06196C9.70049 1.29223 9.53086 1.51113 9.38208 1.70177C9.08507 2.08235 8.67618 2.59203 8.23195 3.10367C7.79059 3.612 7.30123 4.13751 6.84437 4.54118C6.61671 4.74234 6.38141 4.92733 6.15196 5.06565C5.94081 5.19294 5.65068 5.33325 5.33326 5.33325C5.01584 5.33325 4.72569 5.19294 4.51455 5.06565C4.2851 4.92733 4.0498 4.74234 3.82213 4.54118C3.36527 4.13751 2.87591 3.612 2.43456 3.10367C1.99032 2.59203 1.58144 2.08235 1.28443 1.70177C1.13565 1.51112 0.966016 1.29223 0.796421 1.06196C0.578078 0.765499 0.641406 0.348167 0.937868 0.129824C1.05704 0.0420541 1.19575 -0.000193701 1.33321 -7.83046e-05L5.33326 -7.82569e-05L9.33329 -7.82092e-05C9.47075 -0.000193602 9.60946 0.0420542 9.72864 0.129824Z" fill="#B2B9C7"/>
</svg>
        </div>
        <button class="text-sm text-gray-600 border border-gray-300 rounded-md px-2 w-full md:w-[100px] py-2 hover:bg-gray-100">
          Edit Content
        </button>
      </div>
    </div>
  </div>
  
 <div class="flex justify-start items-center gap-2 mt-6">
          <div class="rounded-md border border-gray-300  justify-center items-center px-3 p-2 py-3 flex gap-2 w-[130px]">
            <input type="text" name="" id="" placeholder="Attribute" class="outline-none border-none w-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
  <path d="M9.06213 0.96332C9.35859 1.18166 9.42192 1.599 9.20358 1.89546C9.03398 2.12573 8.86435 2.34462 8.71557 2.53526C8.41856 2.91584 8.00968 3.42553 7.56544 3.93717C7.12409 4.4455 6.63473 4.97101 6.17787 5.37467C5.9502 5.57583 5.7149 5.76083 5.48545 5.89915C5.27431 6.02644 4.98418 6.16675 4.66676 6.16675C4.34934 6.16675 4.05919 6.02644 3.84804 5.89915C3.61859 5.76083 3.38329 5.57583 3.15563 5.37467C2.69877 4.97101 2.20941 4.4455 1.76805 3.93717C1.32382 3.42553 0.914934 2.91584 0.617924 2.53526C0.469143 2.34462 0.299512 2.12573 0.129917 1.89546C-0.0884256 1.599 -0.0250978 1.18166 0.271364 0.96332C0.390537 0.87555 0.529245 0.833302 0.66671 0.833418L4.66675 0.833418L8.66679 0.833418C8.80425 0.833302 8.94296 0.87555 9.06213 0.96332Z" fill="#B2B9C7"/>
</svg>
          </div>
        <span class="text-[#B2B9C7]">=</span>
        <div class="rounded-md border border-gray-300  justify-center items-center px-3 p-2 py-3 flex gap-2 w-[130px]">
            <input type="text" name="" id=""  class="outline-none border-none w-full">
         
          </div>
        </div>



  <div class="bg-[#FCF8E3] border-[#E1D7C5] border-1 text-[#8A6D3B] w-[18%] p-2 rounded-lg mt-8">No default attributes are set.</div>
 
 <div class="flex justify-center items-center">
    <button class="bg-[#551895] text-white rounded-md px-5 py-3 mt-4">Import Users from Files</button>
</div>



  </body>
</html>
