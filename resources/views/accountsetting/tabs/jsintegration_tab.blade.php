<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Integration Settings</title>
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
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Setting</button>
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">JS Integration</button>

            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Advanced JS</button>

            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">UTM Tracking</button>

 

        </div>    --}}
        
        
         <p class="text-gray-700 mb-8">This section allows for extra configuration on your Javascript Main loader</p>

        <!-- Retrieve visitor info -->
        <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-lg font-semibold text-purple-900 mb-2">Retrieve city, county, and country for your visitors?</h2>
            <p class="text-gray-600 text-sm mb-4">Visitor info values can be used in onsite campaigns segmentation.</p>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="retrieve-info" value="yes">
                    <span class="ml-2 text-gray-700">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="retrieve-info" value="no" checked>
                    <span class="ml-2 text-gray-700">No</span>
                </label>
            </div>
        </div>

        <!-- Listen to input fields -->
        <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-lg font-semibold text-purple-900 mb-2">Listen to input fields and identify email addresses.</h2>
            <p class="text-gray-600 text-sm mb-4">Identifying visitors allows you to send them behavioral emails later.</p>
            <div class="flex items-center space-x-4 mb-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio h-16 text-purple-900 accent-purple-800 w-5 h-5" name="listen-emails" value="yes">
                    <span class="ml-2 text-gray-700">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio h-16 text-purple-900 accent-purple-800 w-5 h-5" name="listen-emails" value="no" checked>
                    <span class="ml-2 text-gray-700">No</span>
                </label>
            </div>
            <div class="mb-4">
                <label for="email-source" class="block text-gray-700 mb-2">Email source value</label>
                <input type="text" id="email-source" class="w-full h-16 px-3 py-2 h-12 border border-gray-300 rounded-md focus:outline-none focus:ring-purple-500 focus:border-purple-500" placeholder="User email or ID">
                <p class="text-gray-600 text-sm text-right mt-1">All users identified by entering their email addresses will get this value for the source attribute.</p>
            </div>
            <div>
                <label for="css-selectors" class="block text-gray-700 mb-2">CSS selectors for fields to listen to their input</label>
                <input type="text" id="css-selectors" class="w-full h-16 px-3 py-2 h-12 border border-gray-300 rounded-md focus:outline-none focus:ring-purple-500 focus:border-purple-500" placeholder="User email or ID">
                <p class="text-gray-600 text-right text-sm mt-1">Only input elements matching these CSS selectors will be listened to.</p>
            </div>
        </div>

        <!-- Generate referrer events -->
        <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-lg font-semibold text-purple-900 mb-2">Generate referrer events?</h2>
            <p class="text-gray-600 text-sm mb-4">Referrer events are created when users land on your site coming from other domains. Domain and URL are automatically added to the event.</p>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 h-16 accent-purple-800 w-5 h-5" name="referrer-events" value="yes">
                    <span class="ml-2 text-gray-700">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 h-16 accent-purple-800 w-5 h-5" name="referrer-events" value="no" checked>
                    <span class="ml-2 text-gray-700">No</span>
                </label>
            </div>
        </div>

        <!-- Cookie domain -->
        <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-lg font-semibold text-purple-900 mb-2">Cookie domain</h2>
            <p class="text-gray-600 text-sm mb-4">See the cookie for this domain instead of hostname. IMPORTANT: use account root domain.</p>
            <div class="flex items-center space-x-4">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="cookie-domain" value="yes">
                    <span class="ml-2 text-gray-700">Yes</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-purple-900 accent-purple-800 w-5 h-5" name="cookie-domain" value="no" checked>
                    <span class="ml-2 text-gray-700">No</span>
                </label>
            </div>
             <p class="text-gray-600 text-sm text-right mt-4">This setting is needed when the PixelJS runs on different subdomains.</p>
        </div>

        <!-- Update Settings Button -->
        <div>
            <button class="px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-[#AD94FF]">Update Settings</button>
        </div>

    </div>

</body>
</html>