<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usage</title>
    <!-- Add CSS links or styles here -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4 bg-gray-100">
    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Usage</button>
            <button class="px-4 py-1 rounded text-gray-700 hover:bg-gray-200">Billing History</button>
            <button class="px-4 py-1 rounded text-gray-700 hover:bg-gray-200">Info.</button>
        </div> --}}

        <!-- Plan Level Value -->
        <div class="mb-6 p-4 bg-[#EEEAFF] space-y-3 rounded-lg">
            <p class="text-gray-700 text-base">Plan Level Value:</p>
            <h2 class="text-[#551895] text-3xl font-bold">150+ <span class="text-sm font-normal">(exceeding)</span></h2>
        </div>

        <!-- Active Users Current Month -->
        <div class="mb-6 bg-[#EEEAFF] rounded-lg p-3">
            <p class="text-gray-700 text-sm mb-2">Active Users Current Month</p>
            <div class="h-4 bg-[#CABCF8] flex items-center rounded-full mb-4 h-6 relative">
                <div class="h-4 bg-[#AD94FF]   rounded-full" style="width: 60%;"></div>
                <span class="absolute top-1 right-2 text-xs  text-center text-white">100K</span>
            </div>
          
        </div>

        <div class="flex space-x-4">
            <div class=" w-96 p-4 bg-[#EEEAFF] rounded">
                <p class="text-[#551895]  text-sm">Used</p>
                <h2 class="text-[#551895] text-4xl font-bold">00.0(0.00%)</h2>
            </div>
            <div class="w-96 p-4 bg-[#EEEAFF] rounded">
                <p class="text-[#551895]  text-sm">Level Limit</p>
                <h2 class="text-[#551895] text-4xl font-bold">20K</h2>
            </div>
        </div>




        <!-- Emails -->
        <div class="mb-6 mt-6 bg-[#EEEAFF] rounded-lg p-3">
            <p class="text-gray-700 text-sm mb-2">Email</p>
            <div class="h-4 bg-[#CABCF8] flex items-center rounded-full mb-4 h-6 relative">
                <div class="h-4 bg-[#AD94FF]   rounded-full" style="width: 60%;"></div>
                <span class="absolute top-1 right-2 text-xs  text-center text-white">100K</span>
            </div>
          
        </div>

        <div class="flex space-x-4">
            <div class=" w-96 p-4 bg-[#EEEAFF] rounded">
                <p class="text-[#551895]  text-sm">Used</p>
                <h2 class="text-[#551895] text-4xl font-bold">00.0(0.00%)</h2>
            </div>
            <div class="w-96 p-4 bg-[#EEEAFF] rounded">
                <p class="text-[#551895]  text-sm">Level Limit</p>
                <h2 class="text-[#551895] text-4xl font-bold">20K</h2>
            </div>
        </div>


    </div>
</body>
</html>