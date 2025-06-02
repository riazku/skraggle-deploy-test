<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Campaigns</title>
  </head>
  <body>
    <div class="container mx-auto p-6">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Events
        </button>
        <button
          class="px-3 py-1.5 rounded-lg !border !border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Click
        </button>
      </div> --}}

      <div class="flex flex-wrap gap-2 mt-1">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Click Statistics</h1>
        <div class="flex justify-center items-center gap-2 md:ml-10 ml-0">
          <button
            class="!border-[#CFD5DF80] bg-[#ebeff3] !border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
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
            class="!border-[#CFD5DF80] bg-[#ebeff3] !border-1 gap-6 text-[#3F3F3F] flex !justify-between items-center rounded-md px-3 p-1"
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

      <div class="flex gap-2 mt-5">
        <div class="w-[10%]"></div>

        <div class="bg-[#EEEAFF] rounded-md p-3 w-[40%]">
          <h4 class="text-[#551895] text-[16px]">View Item</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
        <div class="bg-[#EEEAFF] rounded-md p-3 w-[40%]">
          <h4 class="text-[#551895] text-[16px]">View Item</h4>
          <div class="flex justify-start items-center gap-4">
            <h1 class="text-[#551895] !text-[44px] font-semibold">00.0</h1>
            <h6
              class="bg-[#DAD2FB] rounded-md text-[#551895] px-3 p-[1px] mt-2"
            >
              00.0 (%)
            </h6>
          </div>
        </div>
        <div class="bg-[#EEEAFF] rounded-md p-3 w-[40%]">
          <h4 class="text-[#551895] text-[16px]">View Item</h4>
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

      <div class="flex gap-2 mt-5">
        <div
          class="w-[10%] !border-1 !border-[#CAD7EC] rounded-md p-3 h-[75px] flex justify-center items-center text-[#3F3F3F]"
        >
          00.0
        </div>
        <div
          class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%] h-[75px]"
        ></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
      </div>
      <div class="flex gap-2 mt-1">
        <div
          class="w-[10%] !border-1 !border-[#CAD7EC] rounded-md p-3 h-[75px] flex justify-center items-center text-[#3F3F3F]"
        >
          00.0
        </div>
        <div
          class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%] h-[75px]"
        ></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
      </div>
      <div class="flex gap-2 mt-1">
        <div
          class="w-[10%] !border-1 !border-[#CAD7EC] rounded-md p-3 h-[75px] flex justify-center items-center text-[#3F3F3F]"
        >
          00.0
        </div>
        <div
          class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%] h-[75px]"
        ></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
      </div>
      <div class="flex gap-2 mt-1">
        <div
          class="w-[10%] !border-1 !border-[#CAD7EC] rounded-md p-3 h-[75px] flex justify-center items-center text-[#3F3F3F]"
        >
          00.0
        </div>
        <div
          class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%] h-[75px]"
        ></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
        <div class="!border-1 !border-[#CAD7EC] rounded-md p-3 w-[40%]"></div>
      </div>

      <div class="flex gap-2 mt-5">
        <div class="bg-[#EEEAFF] rounded-md p-3 w-[50%]">
          <h4 class="text-[#551895] text-[16px]">No Activity</h4>
          <h1 class="text-[#551895] !text-[42px] font-semibold">00.0</h1>
        </div>
        <div class="bg-[#EEEAFF] rounded-md p-3 w-[50%]">
          <h4 class="text-[#551895] text-[16px]">No Purchase</h4>
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
