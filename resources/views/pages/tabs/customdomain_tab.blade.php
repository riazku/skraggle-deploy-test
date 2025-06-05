<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Domain & Links Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" p-6">
    <div>
        <!-- Header Tabs -->


        <!-- Content Area -->
        <div class="p-6">
            <!-- Custom Subdomain Section -->
            <p class="text-gray-700 mb-6">
                You can use custom subdomains for public links.
            </p>

            <div class="bg-[#EEEAFF] border border-purple-200 rounded-md p-4 mb-6">
                <p class="text-sm text-gray-700 mb-4 font-bold">
                    Subdomain is validated before it is saved. Must be a subdomain of: biggorillapps.com
                </p>
                
                <input 
                    type="text" 
                    placeholder="User email or ID"
                    class="w-full h-20 px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent mb-4"
                />
                
                <button class="px-6 py-2 bg-[#551895] text-white font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Save
                </button>
            </div>

            <!-- Public Links Section -->
            <div class="bg-[#EEEAFF] border border-purple-200 rounded-md p-4 mb-6">
                <p class="text-sm text-gray-700 mb-4 font-bold">
    Public links for subscribe/unsubscribe can be found under 
    <a href="#" class="text-blue-600">user list</a>.
</p>

                
                <p class="text-sm text-gray-700 mb-4">
                    Links for campaigns
                </p>
                
                <div class="space-y-4">
                    <input 
                        type="text" 
                        placeholder="User email or ID"
                        class="w-full h-20 px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    />
                    
                    <input 
                        type="text" 
                        placeholder="User email or ID"
                        class="w-full h-20 px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    />
                    
                    <input 
                        type="text" 
                        placeholder="User email or ID"
                        class="w-full h-20 px-3 py-2 border border-gray-300 rounded-md bg-white text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                    />
                </div>
                
                <button class="mt-4 px-6 py-2 bg-[#551895] text-white font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
                    Save
                </button>
            </div>
        </div>
    </div>
</body>
</html>