<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access</title>


    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    

    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Access</button>
            <button class="px-4 py-1 rounded text-gray-700 hover:bg-gray-200">Profile</button>
        </div> --}}

        <!-- Add favorite accounts section -->
        <div class="bg-[#EEEAFF] p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold text-gray-700 mb-4">Add favorite accounts</h2>
            
            <div class="mb-4">
                <input type="text" class="w-full p-2 rounded-lg h-16 focus:outline-none focus:ring-1 focus:ring-[#AD94FF] rounded bg-white" placeholder="User email or ID">
            </div>

            <div class="text-right text-gray-600 text-sm mb-4">
                You can add up to 30 accounts.
            </div>

            <!-- Example account -->
            <div class="flex items-center gap-x-2 items-center p-3 rounded-lg">
                <p class="text-gray-700">1. Developer@biggorillaapps.com</p>
                <span class="bg-[#CABCF8] text-[#551895] text-xs px-3 py-1 rounded">Admin</span>
            </div>
        </div>


</body>
</html>