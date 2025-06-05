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
      Flow
      </button>
      <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
      Playground
      </button>
   
  
  </div> --}}



<div class="flex flex-col gap-4">

    <div class="bg-[#EEEAFF] rounded-lg w-[50%] p-3">
        <h2 class="text-[#551895] text-[20px] font-semibold">Push Events into the System</h2>

        <div class="mt-3">
            <h3 class="text-[#3F3F3F]">Email</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[100px]  p-3 rounded-lg  resize-none" placeholder="User email or ID"></textarea>
        </div>

             <div class="mt-3">
            <h3 class="text-[#3F3F3F]">Event</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[100px]  p-3 rounded-lg  resize-none" placeholder="Event Json"></textarea>
        </div>

        <button class="py-2 px-6 mt-2 text-white bg-[#551895] rounded-lg">Send</button>

    </div>

        <div class="bg-[#EEEAFF] rounded-lg w-[50%] p-3">
        <h2 class="text-[#551895] text-[20px] font-semibold">Push Events into the System</h2>

        <div class="mt-3">
            <h3 class="text-[#3F3F3F]">Email</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[100px]  p-3 rounded-lg  resize-none" placeholder="User email or ID"></textarea>
        </div>

             <div class="mt-3">
            <h3 class="text-[#3F3F3F]">Event</h3>
            <textarea type="text" name="" id="" class="outline-none border-none bg-white mt-1 w-full h-[100px]  p-3 rounded-lg  resize-none" placeholder="Event Json"></textarea>
        </div>

        <button class="py-2 px-6 mt-2 text-white bg-[#551895] rounded-lg">Send</button>

    </div>
</div>


            </div>

  </body>
</html>
