<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="flex">
    <main class="flex-1 p-8 bg-white">



      <!-- Search Fields -->
      <div class="space-y-6">
        <div>
          <!-- Feed Parser -->
          <label class="block mb-1 text-gray-600">Feed parser (all active products)</label>
          <div class="relative w-[35%] border-b border-gray-400 rounded-none">
            <input type="text" placeholder="Search products"
              class="w-full p-3 pl-10 focus:outline-none" />
            <svg xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
          </div>
          <div class="w-[530px] h-[94px] border border-[#D6CEFA] bg-[#EEEAFF] mt-5 p-3"></div>
        </div>

        <!-- Product Catalog -->
        <div class="mt-3">
          <label class="block mb-1 text-gray-600 mt-2">Product Catalog</label>
          <div class="relative w-[35%] border-b border-gray-400 rounded-none">
            <input type="text" placeholder="Search category titles"
              class="w-full p-3 pl-10 focus:outline-none" />
            <svg xmlns="http://www.w3.org/2000/svg"
              class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
          </div>
          <div class="w-[530px] h-[94px] border border-[#D6CEFA] bg-[#EEEAFF] mt-5 p-3"></div>
        </div>
      </div>

      <!-- Radio Buttons -->
<div class="space-y-4 mt-6">
  <div>
    <div class="mb-1 text-gray-600">Main</div>
    <div class="flex items-center gap-6">
      <label class="flex items-center gap-2">
        <input type="radio" name="main" class="w-5 h-5 accent-purple-700" />
        Yes
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="main" class="w-5 h-5 accent-purple-700" />
        No
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="main" class="w-5 h-5 accent-purple-700" />
        Ignore
      </label>
    </div>
  </div>

  <div>
    <div class="mb-1 text-gray-600">Active</div>
    <div class="flex items-center gap-6">
      <label class="flex items-center gap-2">
        <input type="radio" name="active" class="w-5 h-5 accent-purple-700" />
        Yes
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="active" class="w-5 h-5 accent-purple-700" />
        No
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="active" class="w-5 h-5 accent-purple-700" />
        Ignore
      </label>
    </div>
  </div>

  <div>
    <div class="mb-1 text-gray-600">Stock</div>
    <div class="flex items-center gap-6">
      <label class="flex items-center gap-2">
        <input type="radio" name="stock" class="w-5 h-5 accent-purple-700" />
        Yes
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="stock" class="w-5 h-5 accent-purple-700" />
        No
      </label>
      <label class="flex items-center gap-2">
        <input type="radio" name="stock" class="w-5 h-5 accent-purple-700" />
        Ignore
      </label>
    </div>
  </div>
</div>


      <!-- Buttons -->
      <div class="mt-6 flex flex-wrap items-center justify-between relative w-full">
        <!-- Left side buttons -->
        <div class="flex gap-4">
          <button class="text-white px-4 py-2 rounded bg-[#551895]">Count Items</button>
          <button class="px-6 py-2 rounded border border-[#3F3F3F]">Preview Items</button>
        </div>
        <!-- Right side button -->
        <button class="absolute left-[87%] top-[-500%] -translate-y-1/2 px-4 py-2 rounded border border-[#CFD5DF80]">Advanced Query</button>
      </div>
    </main>
  </div>


</body>
</html>