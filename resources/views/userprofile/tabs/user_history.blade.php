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
      <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          My Segments
        </button>
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          My Lists
        </button>

        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm"
        >
          Defaults
        </button>
      </div>

      <!-- Date -->
      <div class="flex flex-wrap items-center gap-2 mt-5">
        <h1 class="text-[#3F3F3F] font-bold text-[19px]">Latest Emails</h1>
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

      <div class="flex justify-end items-center mb-6">
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input
              type="text"
              placeholder="Search"
              class="border-gray-300 border-b px-3 py-1 pl-8"
            />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-5 h-5 text-gray-400 absolute left-2 top-2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
              />
            </svg>
          </div>
          <button
            class="bg-[#CABCF8] text-[#551895] px-3 py-1 font-bold rounded-md"
          >
            Running
          </button>
          <button
            class="border-gray-200 border text-gray-600 px-3 py-1 font-bold rounded-md"
          >
            Paused
          </button>
        </div>
      </div>

      <!-- table -->

      <div class="overflow-x-auto p-2">
        <table
          class="min-w-full border-separate border-spacing-y-2 rounded-2xl shadow-sm"
        >
          <thead class="overflow-hidden">
            <tr class="bg-[#DDD7F5] text-[#551895] text-left text-sm">
              <th class="px-4 py-4 rounded-l-2xl !rounded-b-none">
                <div class="flex items-center gap-2">
                  <input type="checkbox" />
                  <span class="font-semibold">Contacts (12,346)</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    height="14"
                    viewBox="0 0 10 14"
                    fill="none"
                  >
                    <path d="M0.271365 5.63604C..." fill="#551895" />
                    <path d="M9.06238 8.56317C..." fill="#CABCF8" />
                  </svg>
                </div>
              </th>
              <th class="px-4 py-4 font-semibold">Email</th>
              <th class="px-4 py-4 font-semibold">Created at</th>
              <th class="px-4 py-4 font-semibold rounded-r-2xl !rounded-b-none">
                Assignee
              </th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700">
            <tr class="bg-white">
              <td class="px-4 py-4">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600">jason@gmail.com</td>
              <td class="px-4 py-4 text-gray-500">22/10/2022</td>
              <td class="px-4 py-4">
                <button
                  class="bg-[#551895] rounded-full text-sm text-white w-[100px] px-4 py-2 flex justify-between items-center gap-2"
                >
                  Send
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    height="7"
                    viewBox="0 0 10 7"
                    fill="none"
                  >
                    <path
                      d="M9.72864 1.06317C10.0251 1.28152 10.0884 1.69885 9.87008 1.99531C9.70049 2.22558 9.53086 2.44447 9.38208 2.63512C9.08507 3.0157 8.67618 3.52538 8.23195 4.03702C7.79059 4.54535 7.30123 5.07086 6.84437 5.47453C6.61671 5.67569 6.38141 5.86068 6.15196 5.999C5.94081 6.12629 5.65068 6.2666 5.33326 6.2666C5.01584 6.2666 4.72569 6.12629 4.51455 5.999C4.2851 5.86068 4.0498 5.67569 3.82213 5.47453C3.36527 5.07086 2.87591 4.54535 2.43456 4.03702C1.99032 3.52538 1.58144 3.0157 1.28443 2.63512C1.13565 2.44447 0.966016 2.22558 0.796421 1.99531C0.578078 1.69885 0.641406 1.28152 0.937868 1.06317C1.05704 0.975404 1.19575 0.933156 1.33321 0.933271L5.33326 0.933271L9.33329 0.933271C9.47075 0.933156 9.60946 0.975404 9.72864 1.06317Z"
                      fill="#CABCF8"
                    />
                  </svg>
                </button>
              </td>
            </tr>

            <tr class="bg-white">
              <td class="px-4 py-4">
                <div class="flex items-center">
                  <input type="checkbox" />
                  <span class="ml-2">Group-DB303GF</span>
                </div>
              </td>
              <td class="px-4 py-4 text-gray-600">jason@gmail.com</td>
              <td class="px-4 py-4 text-gray-500">22/10/2022</td>
              <td class="px-4 py-4">
                <button
                  class="bg-[#551895] rounded-full text-sm text-white w-[100px] px-4 py-2 flex justify-between items-center gap-2"
                >
                  Send
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    height="7"
                    viewBox="0 0 10 7"
                    fill="none"
                  >
                    <path
                      d="M9.72864 1.06317C10.0251 1.28152 10.0884 1.69885 9.87008 1.99531C9.70049 2.22558 9.53086 2.44447 9.38208 2.63512C9.08507 3.0157 8.67618 3.52538 8.23195 4.03702C7.79059 4.54535 7.30123 5.07086 6.84437 5.47453C6.61671 5.67569 6.38141 5.86068 6.15196 5.999C5.94081 6.12629 5.65068 6.2666 5.33326 6.2666C5.01584 6.2666 4.72569 6.12629 4.51455 5.999C4.2851 5.86068 4.0498 5.67569 3.82213 5.47453C3.36527 5.07086 2.87591 4.54535 2.43456 4.03702C1.99032 3.52538 1.58144 3.0157 1.28443 2.63512C1.13565 2.44447 0.966016 2.22558 0.796421 1.99531C0.578078 1.69885 0.641406 1.28152 0.937868 1.06317C1.05704 0.975404 1.19575 0.933156 1.33321 0.933271L5.33326 0.933271L9.33329 0.933271C9.47075 0.933156 9.60946 0.975404 9.72864 1.06317Z"
                      fill="#CABCF8"
                    />
                  </svg>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Navigation -->

      <div class="flex justify-between items-center gap-2 mt-5">
        <button
          class="border-[#551895] border-1 flex justify-center items-center gap-2 text-[#551895] py-2 px-3 rounded-lg"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="13"
            viewBox="0 0 15 13"
            fill="none"
          >
            <path
              d="M6.0213 0.27686L7.19018e-08 6.07004L6.0213 11.8632C6.07568 11.9316 6.14477 11.9879 6.22389 12.0285C6.30301 12.0691 6.39032 12.0929 6.47989 12.0984C6.56947 12.1039 6.65923 12.0908 6.7431 12.0602C6.82696 12.0296 6.90298 11.9821 6.96599 11.9209C7.02901 11.8597 7.07755 11.7863 7.10834 11.7056C7.13913 11.6249 7.15145 11.5388 7.14445 11.4532C7.13746 11.3675 7.11132 11.2843 7.0678 11.2092C7.02429 11.134 6.96441 11.0687 6.89223 11.0176L2.38722 6.66975L14.3734 6.66975C14.5396 6.66975 14.699 6.60657 14.8165 6.4941C14.934 6.38164 15 6.2291 15 6.07004C15 5.91099 14.934 5.75845 14.8165 5.64599C14.699 5.53352 14.5396 5.47034 14.3734 5.47034L2.38722 5.47034L6.89223 1.12245C7.00938 1.00952 7.07487 0.856675 7.07428 0.697535C7.0737 0.538393 7.00708 0.385993 6.8891 0.273861C6.77111 0.161729 6.61142 0.0990496 6.44515 0.0996123C6.27888 0.100174 6.11966 0.163933 6.00251 0.27686L6.0213 0.27686Z"
              fill="#551895"
            /></svg
          >Previous
        </button>

        <div class="flex justify-center items-center gap-1">
          <button
            class="bg-[#551895] rounded-lg text-white text-center px-4 py-2"
          >
            1
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            2
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            3
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            ...
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            47
          </button>
          <button class="rounded-lg text-[#3F3F3F] text-center px-2 py-2">
            48
          </button>
        </div>
        <button
          class="border-[#551895] border-1 flex justify-center items-center gap-2 text-[#551895] py-2 px-3 rounded-lg"
        >
          Next

          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="13"
            viewBox="0 0 15 13"
            fill="none"
          >
            <path
              d="M8.9787 12.3227L15 6.52956L8.9787 0.73638C8.92432 0.66803 8.85523 0.61166 8.77611 0.571087C8.69699 0.530515 8.60968 0.506687 8.52011 0.501217C8.43053 0.495746 8.34077 0.508762 8.2569 0.539381C8.17304 0.57 8.09702 0.617508 8.03401 0.67869C7.97099 0.739872 7.92245 0.813298 7.89166 0.893998C7.86087 0.974698 7.84855 1.06079 7.85555 1.14644C7.86254 1.23209 7.88868 1.3153 7.9322 1.39044C7.97571 1.46559 8.03559 1.5309 8.10777 1.58197L12.6128 5.92986L0.626568 5.92986C0.460392 5.92986 0.301023 5.99304 0.183519 6.10551C0.066015 6.21797 6.97066e-07 6.37051 6.90114e-07 6.52956C6.83161e-07 6.68862 0.066015 6.84116 0.183519 6.95362C0.301023 7.06609 0.460392 7.12927 0.626568 7.12927L12.6128 7.12927L8.10777 11.4772C7.99062 11.5901 7.92513 11.7429 7.92572 11.9021C7.9263 12.0612 7.99292 12.2136 8.1109 12.3257C8.22889 12.4379 8.38858 12.5006 8.55485 12.5C8.72112 12.4994 8.88034 12.4357 8.99749 12.3227L8.9787 12.3227Z"
              fill="#551895"
            />
          </svg>
        </button>
      </div>
    </div>
  </body>
</html>
