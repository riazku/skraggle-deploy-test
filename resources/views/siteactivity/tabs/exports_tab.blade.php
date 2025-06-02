<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Campaigns</title>
  </head>
  <body>
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Status
        </button>

        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Activity
        </button>

        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Events
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Exports
        </button>
      </div> --}}

      <h1 class="text-[#3F3F3F] font-bold text-[20px]">
        Repetitive Exports to External Servers
      </h1>
      <div class="bg-white p-4 rounded-lg border border-gray-300 shadow mt-3">

        <div class="flex flex-col justify-center items-start space-y-5">
          <!-- Toggle 1 -->
          <div class="flex justify-between items-center w-[140px]">
            <h2 class="text-[#3F3F3F] text-[16px]">Enabled</h2>
            <div
              class="toggle w-12 h-6 bg-[#DDD7F5] rounded-full flex items-center px-1 cursor-pointer transition duration-300"
            >
              <span
                class="dot w-4 h-4 bg-[#551895] rounded-full transition transform duration-300"
              ></span>
            </div>
          </div>

          <!-- Toggle 2 -->
          <div class="flex justify-between items-center w-[140px]">
            <h2 class="text-[#3F3F3F] text-[16px]">ALl Events</h2>
            <div
              class="toggle w-12 h-6 bg-[#DDD7F5] rounded-full flex items-center px-1 cursor-pointer transition duration-300"
            >
              <span
                class="dot w-4 h-4 bg-[#551895] rounded-full transition transform duration-300"
              ></span>
            </div>
          </div>

          <!-- Toggle 3 -->
         <div class="flex justify-between items-center w-[140px]">
            <h2 class="text-[#3F3F3F] text-[16px]">Notification</h2>
            <div
              class="toggle w-12 h-6 bg-[#DDD7F5] rounded-full flex items-center px-1 cursor-pointer transition duration-300"
            >
              <span
                class="dot w-4 h-4 bg-[#551895] rounded-full transition transform duration-300"
              ></span>
            </div>
          </div>

        
   
   
      </div>

           <!-- Campaign Form -->
        <div class="mb-2 mt-5">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >Events to export</label
          >
          <div
            class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-center"
          >
            <div
              class="flex justify-start items-center w-[40%] rounded-md border border-gray-300"
            >
              <input
                type="text"
                id="title"
                placeholder="Please add a tittle"
                class="w-[95%] p-2 outline-none"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="10"
                height="7"
                viewBox="0 0 10 7"
                fill="none"
              >
                <path
                  d="M9.72864 1.0622C10.0251 1.28054 10.0884 1.69787 9.87008 1.99434C9.70049 2.22461 9.53086 2.4435 9.38208 2.63414C9.08507 3.01472 8.67618 3.52441 8.23195 4.03605C7.79059 4.54438 7.30123 5.06988 6.84437 5.47355C6.61671 5.67471 6.38141 5.85971 6.15196 5.99803C5.94081 6.12532 5.65068 6.26562 5.33326 6.26562C5.01584 6.26562 4.72569 6.12532 4.51455 5.99803C4.2851 5.85971 4.0498 5.67471 3.82213 5.47355C3.36527 5.06988 2.87591 4.54438 2.43456 4.03605C1.99032 3.52441 1.58144 3.01472 1.28443 2.63414C1.13565 2.4435 0.966016 2.22461 0.796421 1.99434C0.578078 1.69787 0.641406 1.28054 0.937868 1.0622C1.05704 0.974427 1.19575 0.932179 1.33321 0.932295L5.33326 0.932295L9.33329 0.932295C9.47075 0.932179 9.60946 0.974427 9.72864 1.0622Z"
                  fill="#B2B9C7"
                />
              </svg>
            </div>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>

        <!-- File Name -->
        <div class="mb-2 mt-5">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >File Name</label
          >
          <div
            class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-center"
          >
            <div
              class="flex justify-start items-center w-[40%] rounded-md border border-gray-300"
            >
              <input
                type="text"
                id="title"
                value="eirecec/ecfrwr/./derg.jsf"
                placeholder="Please add a tittle"
                class="w-[95%] p-2 outline-none text-[#3F3F3F]"
              />
       
            </div>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>


  <!-- FTP Server-->
        <div class="mb-2 mt-5">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >FTP Server</label
          >
          <div
            class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-center"
          >
            <div
              class="flex justify-start items-center w-[40%] rounded-md border border-gray-300"
            >
              <input
                type="text"
                id="title"
                placeholder="None Selected"
                class="w-[95%] p-2 outline-none"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="10"
                height="7"
                viewBox="0 0 10 7"
                fill="none"
              >
                <path
                  d="M9.72864 1.0622C10.0251 1.28054 10.0884 1.69787 9.87008 1.99434C9.70049 2.22461 9.53086 2.4435 9.38208 2.63414C9.08507 3.01472 8.67618 3.52441 8.23195 4.03605C7.79059 4.54438 7.30123 5.06988 6.84437 5.47355C6.61671 5.67471 6.38141 5.85971 6.15196 5.99803C5.94081 6.12532 5.65068 6.26562 5.33326 6.26562C5.01584 6.26562 4.72569 6.12532 4.51455 5.99803C4.2851 5.85971 4.0498 5.67471 3.82213 5.47355C3.36527 5.06988 2.87591 4.54438 2.43456 4.03605C1.99032 3.52441 1.58144 3.01472 1.28443 2.63414C1.13565 2.4435 0.966016 2.22461 0.796421 1.99434C0.578078 1.69787 0.641406 1.28054 0.937868 1.0622C1.05704 0.974427 1.19575 0.932179 1.33321 0.932295L5.33326 0.932295L9.33329 0.932295C9.47075 0.932179 9.60946 0.974427 9.72864 1.0622Z"
                  fill="#B2B9C7"
                />
              </svg>
            </div>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>


         <!-- Recurrence-->
        <div class="mb-2 mt-5">
          <label for="title" class="block text-sm font-medium text-gray-700"
            >Recurrence</label
          >
          <div
            class="mt-1 flex flex-wrap md:gap-0 gap-3 justify-between items-center"
          >
        <div class="flex items-center gap-2">
            <h6 class="text-[#3F3F3F]">Every</h6>
        <button class="flex justify-between items-center gap-2 w-[100px] py-2  ml-6 p-2  rounded-lg text-[#3F3F3F] bg-[#EBEFF3]">Day <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none">
  <path d="M9.72864 0.963564C10.0251 1.18191 10.0884 1.59924 9.87008 1.8957C9.70049 2.12597 9.53086 2.34487 9.38208 2.53551C9.08507 2.91609 8.67618 3.42577 8.23195 3.93741C7.79059 4.44574 7.30123 4.97125 6.84437 5.37492C6.61671 5.57608 6.38141 5.76107 6.15196 5.89939C5.94081 6.02668 5.65068 6.16699 5.33326 6.16699C5.01584 6.16699 4.72569 6.02668 4.51455 5.89939C4.2851 5.76107 4.0498 5.57608 3.82213 5.37492C3.36527 4.97125 2.87591 4.44574 2.43456 3.93741C1.99032 3.42577 1.58144 2.91609 1.28443 2.53551C1.13565 2.34487 0.966016 2.12597 0.796421 1.8957C0.578078 1.59924 0.641406 1.18191 0.937868 0.963564C1.05704 0.875794 1.19575 0.833547 1.33321 0.833662L5.33326 0.833662L9.33329 0.833662C9.47075 0.833547 9.60946 0.875794 9.72864 0.963564Z" fill="#B2B9C7"/>
</svg></button>
<span class="text-[#B2B9C7] text-sm">at</span>
  <button class="flex justify-center items-center gap-2 w-[80px] py-2   p-2  rounded-lg text-[#3F3F3F] bg-[#EBEFF3]">00.00</button>
  <span class="text-[#B2B9C7] text-sm">at</span>
  <button class="flex justify-center items-center gap-2 w-[80px] py-2   p-2  rounded-lg text-[#3F3F3F] bg-[#EBEFF3]">00.00</button>
        </div>
            <button
              class="md:ml-4 ml-0 text-sm text-gray-600 border border-gray-300 rounded-md px-2 md:w-[100px] w-full py-2 hover:bg-gray-100"
            >
              Edit Content
            </button>
          </div>
        </div>

    </div>

<div class="flex justify-end items-center mt-5">
    <button class="bg-[#551895] text-white py-3 px-6 rounded-lg ">Update Settings</button>
</div>



  <div class="flex flex-wrap gap-2 mt-1">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Manual Export</h1>
        <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
          <span class="text-[17px] text-[#B2B9C7] font-medium text-[#B2B9C7]">
            To
          </span>
          <button
            class="border-[#CFD5DF80] bg-[#ebeff3] border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
          >
            <h3 class="">12/5/2024</h3>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
            >
              <path
                d="M5.35714 5.92632H12.5859M4.86384 1.82812V3.05773M12.9844 1.82812V3.05758M15.375 5.30758L15.375 13.9219C15.375 15.1645 14.3676 16.1719 13.125 16.1719H4.875C3.63236 16.1719 2.625 15.1645 2.625 13.9219V5.30758C2.625 4.06494 3.63236 3.05758 4.875 3.05758H13.125C14.3676 3.05758 15.375 4.06494 15.375 5.30758Z"
                stroke="#3F3F3F"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>

      <div class="flex justify-start items-center mt-5">
    <button class="bg-[#551895] text-white py-3 px-6 rounded-lg ">Generate Now</button>
</div>

        <script>
          document.querySelectorAll(".toggle").forEach((toggle) => {
            const dot = toggle.querySelector(".dot");
            toggle.addEventListener("click", () => {
              dot.classList.toggle("translate-x-6");
            });
          });
        </script>

  </body>
</html>
