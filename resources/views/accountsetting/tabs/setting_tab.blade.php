<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .bg-purple-100 { background-color: #EEEAFF; }
          .text-purple-900 { color: #551895; }
          .bg-purple-300 { background-color: #CABCF8; }
          .border-purple-500 { border-color: #AD94FF; }
          .bg-purple-800 { background-color: #551895; }
        }
      </style>


</head>
<body>

    <div class="container mx-auto p-6">
        <!-- Tabs -->
        {{-- <div class="flex space-x-4 mb-6">
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Settings</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">JS Integration</button>

            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Advanced JS</button>

            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">UTM Tracking</button>

 

        </div> --}}

        <div class="container mx-auto p-8 bg-purple-100 rounded-lg shadow-md">
            <div class="mb-6">
                <p class="text-gray-700">Purge CDN cache. This will refresh campaigns running on your site within minutes.</p>
                <div class="flex items-center mt-2">
                    <button class="px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-[#AD94FF]">Purge Cache</button>
                    <span class="ml-4 text-sm text-gray-600">Last Time: January 3, 2025. 9:14 PM</span>
                </div>
            </div>
    
            <div class="mb-6">
                <label for="ip-networks" class="block text-gray-700 mb-2">Discard events for the following IP networks or IPs (IPv4 or IPv6):</label>
                <input type="text" id="ip-networks" class="w-full px-3 py-2 h-16 border border-gray-300 rounded-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 rounded bg-white" placeholder="User email or ID">
            </div>
    
            <div class="mb-6">
                <p class="text-gray-700 mb-2">Send emails for your account</p>
                <div class="flex items-center space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="send-emails" value="yes">
                        <span class="ml-2 text-gray-700">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="send-emails" value="no" checked>
                        <span class="ml-2 text-gray-700">No</span>
                    </label>
                </div>
            </div>
    
            <div class="mb-6">
                <p class="text-gray-700 mb-2">Enable consent checkbox on subscription page.</p>
                <div class="flex items-center space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="enable-consent" value="yes">
                        <span class="ml-2 text-gray-700">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="enable-consent" value="no" checked>
                        <span class="ml-2 text-gray-700">No</span>
                    </label>
                </div>
            </div>
    
            <div class="mb-6">
                <p class="text-gray-700 mb-2">Show Tooltips.</p>
                <div class="flex items-center space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 bg-transparent accent-purple-800 w-5 h-5" name="show-tooltips" value="yes">
                        <span class="ml-2 text-gray-700">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="show-tooltips" value="no" checked>
                        <span class="ml-2 text-gray-700">No</span>
                    </label>
                </div>
            </div>
    
            <div class="mb-6">
                <p class="text-gray-700 mb-2">Reindex users' and events' attributes for up-to-date autocomplete suggestions in segmentations.</p>
                <button class="px-4 py-2 bg-purple-300 text-purple-900 rounded-md hover:bg-[#CABCF8]">REINDEX DATA</button>
            </div>
    
            <div>
                <button class="px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-[#AD94FF]">Update Settings</button>
            </div>
    
        </div>
    





    

</div>

</body>
</html>