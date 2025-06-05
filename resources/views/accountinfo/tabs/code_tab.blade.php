<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>

    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Info</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Notification </button>
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Integration Code</button>
            
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">API Key & Account ID</button>

 
        </div>    --}}

        <!-- Integration Content -->
    

            <!-- Info Banner -->
            <div class="bg-[#FCF8E3] w-fit border rounded-lg border-[#E1D7C5] text-[#8A6D3B] p-2 mb-6" role="alert">
                <p>Integration is needed to use our software with your website</p>
            </div>

            <!-- Account ID -->
            <div class="mb-6 px-5 w-fit rounded-lg bg-[#EEEAFF] p-2">
                <span class="text-gray-700 font-semibold">Account ID: </span>
                <span class="">104</span>
            </div>

            <!-- Choose CMS Platform -->
            <div class="mb-6 px-5">
                <span class="text-gray-700">Choose Your CMS Platform</span>
                <a href="#" class="text-blue-600 hover:underline ml-2">Show all integrations</a>
            </div>

            <!-- JavaScript Integration Code -->

        <div class="bg-[#EEEAFF] p-5 rounded-lg">


            <div class="mb-6">
                <h3 class="text-lg  mb-2">JavaScript Integration Code:</h3>
                <textarea class="w-full h-40 p-3 border border-gray-300 rounded text-sm !rounded-lg bg-white" placeholder="code"></textarea>
            </div>

            <!-- Development Version -->
            <div class="mb-6">
                <span class="text-lg">Development Version</span>
                <a href="#" class="text-blue-600 hover:underline ml-2">Display</a>
                <textarea class="w-full h-24 p-3 border border-gray-300 rounded text-sm mt-2 !rounded-lg bg-white" placeholder="code"></textarea>
            </div>

            <!-- Update Button -->
            <button class="px-6 py-2 bg-[#551895] text-white rounded">Update</button>

        </div>

    </div>




    
</body>
</html>