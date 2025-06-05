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
    <button class="px-3 py-1.5 rounded-lg bg-[#CABCF8] text-purple-800 text-sm font-semibold">
    Old Purchases
    </button>
    <button class="px-3 py-1.5 rounded-lg border border-[#CFD5DF80] text-gray-600 text-sm">
  Auto Import
    </button>
  
  </div> --}}


  <h1 class="text-[#551895] font-semibold text-[20px]">Import old conversions</h1>
  <p class="text-[#3F3F3F] text-[16px] mt-2">Please check file format to match our documentation. Once imported, you can not remove import effects.</p>

  <div class="flex justify-between items-start border border-[#B2B9C7] p-1 rounded-lg mt-4 w-[62%] ">
    <textarea name="" id="" placeholder="Enter public accessible URL" class="outline-none border-none resize-none w-[90%] p-2 h-[140px]"></textarea>
    <button class="flex justify-center items-center gap-2 border border-[#CFD5DF] py-2 px-4 rounded-lg text-[#3F3F3F] mr-3 mt-3">Uplaod
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M11.5 15.577V6.927L9.17 9.257L8.462 8.539L12 5L15.539 8.539L14.831 9.258L12.5 6.927V15.577H11.5ZM6.616 19C6.15533 19 5.771 18.846 5.463 18.538C5.155 18.23 5.00067 17.8453 5 17.384V14.961H6V17.384C6 17.538 6.064 17.6793 6.192 17.808C6.32 17.9367 6.461 18.0007 6.615 18H17.385C17.5383 18 17.6793 17.936 17.808 17.808C17.9367 17.68 18.0007 17.5387 18 17.384V14.961H19V17.384C19 17.8447 18.846 18.229 18.538 18.537C18.23 18.845 17.8453 18.9993 17.384 19H6.616Z" fill="black"/>
</svg>
    </button>
  </div>
  <button class="text-white bg-[#551895] rounded-lg px-6 py-2 mt-6">Load Files</button>

            </div>

  </body>
</html>
