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
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Notification</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Integration Code</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">API Key & Account ID</button>

 
        </div>    --}}


        <!-- Main Content Area -->
        <div class="flex mt-6">

            <!-- Left Section: Notifications Email -->
            <div class="w-1/2 h-fit p-6 bg-[#EEEAFF] rounded mr-4">
                <h3 class="text-lg font-semibold mb-4">Notifications Email</h3>
                <input type="text" placeholder="User email or ID" class="w-full px-3 py-2 border border-gray-300 rounded mb-4 rounded bg-white">
                <button class="px-4 py-2 bg-[#551895] text-white rounded">Save Changes</button>
            </div>

            <!-- Right Section: Notification Settings -->
            <div class="w-1/2 p-6">
                <h3 class="text-lg font-semibold mb-4">Weekly Reports</h3>
                <div class="flex items-center mb-4">
                    <input type="radio" id="weekly-reports-yes" name="weekly-reports" value="yes" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2">
                    <label for="weekly-reports-yes" class="mr-4">Yes</label>
                    <input type="radio" id="weekly-reports-no" name="weekly-reports" value="no" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2" checked>
                    <label for="weekly-reports-no">No</label>
                </div>

                <h3 class="text-lg font-semibold mb-4">Few Coupons Left</h3>
                <div class="flex items-center mb-4">
                    <input type="radio" id="coupons-yes" name="coupons" value="yes" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2">
                    <label for="coupons-yes" class="mr-4">Yes</label>
                    <input type="radio" id="coupons-no" name="coupons" value="no" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2" checked>
                    <label for="coupons-no">No</label>
                </div>

                <h3 class="text-lg font-semibold mb-4">Newsletter Sent</h3>
                <div class="flex items-center mb-4">
                    <input type="radio" id="newsletter-yes" name="newsletter" value="yes" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2">
                    <label for="newsletter-yes" class="mr-4">Yes</label>
                    <input type="radio" id="newsletter-no" name="newsletter" value="no" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2" checked>
                    <label for="newsletter-no">No</label>
                </div>

                <h3 class="text-lg font-semibold mb-4">Received Payment</h3>
                <div class="flex items-center">
                    <input type="radio" id="payment-yes" name="payment" value="yes" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2">
                    <label for="payment-yes" class="mr-4">Yes</label>
                    <input type="radio" id="payment-no" name="payment" value="no" class="form-radio text-purple-900 accent-purple-800 w-5 h-5 mr-2" checked>
                    <label for="payment-no">No</label>
                </div>
            </div>
        </div>





</div>
    
</body>
</html>