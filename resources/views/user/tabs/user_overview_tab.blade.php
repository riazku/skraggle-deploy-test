<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Campaigns</title>
  </head>
  <body>
    <div class="container mx-auto p-2">
      <!-- Tabs -->
      {{-- <div class="flex space-x-1 mb-6">
        <button
          class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm font-semibold"
        >
          My Campaigns
        </button>
        <button
          class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold"
        >
          Scenarios
        </button>
      </div> --}}

      <div class=" p-2 grid md:grid-cols-2  gap-2 grid-cols-1  w-full rounded-lg ">
        <div class="bg-[#EEEAFF] rounded-md flex flex-col gap-1 p-3">
          <h2 class="text-[#551895] text-[18px] font-semibold">
            Email subscribers
          </h2>

          <p class="text-[#3F3F3F]">
            Email sent to confirm user subscription to a list.
          </p>
         
        </div>
         <div class="bg-[#EEEAFF] rounded-md flex flex-col gap-1 p-3">
          <h2 class="text-[#551895] text-[18px] font-semibold">
           Log in source
          </h2>

          <p class="text-[#3F3F3F]">
            Email sent to confirm user subscription to a list.
          </p>
         
        </div>
      </div>
    </div>
  </body>
</html>
