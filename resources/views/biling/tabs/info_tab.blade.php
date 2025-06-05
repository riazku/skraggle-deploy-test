<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .mt-45 {
            margin-top: 11.25rem; /* 180px */
          }
          .ml-48 {
            margin-left: 12rem; /* 192px */
          }
        }
    </style>
</head>
<body class="p-4 bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="flex space-x-8">
            <!-- Billing Plan -->
            <div class="w-1/2 h-fit bg-[#EEEAFF] p-6 rounded-lg">
                <h2 class="text-xl font-bold text-[#551895] mb-4">Billing Plan</h2>
                <span class="inline-block bg-[#CABCF8] text-[#551895] text-xs px-2 py-1 rounded mb-4">Active: Standard Plan</span>
                <p class="text-gray-700 text-sm mb-4">Pricing is based on number of active users.</p>

                <div class="flex items-center gap-x-2 justify-between">
                    <div class="mb-4 w-full">
                        <label for="planTitle" class="block text-gray-700 text-sm mb-1">Plan Title</label>
                        <input type="text" id="planTitle" class="w-full p-2 rounded-lg h-16 bg-white focus:outline-none placeholder:text-start focus:ring-1 focus:ring-[#AD94FF]" placeholder="info.">
                    </div>
                    
                    <div class="mb-4 w-full">
                        <label for="price" class="block text-gray-700 text-sm mb-1">Price</label>
                        <input type="text" id="price" class="w-full p-2 rounded-lg h-16 bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF]" placeholder="info.">
                    </div>
                </div>

                <button class="w-56 bg-[#551895] text-white py-2 rounded-xl hover:bg-purple-800 transition-colors">Cancel Account</button>
            </div>

            <!-- Billing Information -->
            <div class="w-1/2 bg-[#EEEAFF] p-6 rounded-lg">
                <h2 class="text-xl font-bold text-[#551895] mb-4">Billing Information</h2>
                <p class="text-gray-700 text-sm mb-6">Changing details below will be used for your next invoice.</p>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="firstName" class="block text-gray-700 text-sm mb-1">First Name</label>
                        <input type="text" id="firstName" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="info.">
                    </div>
                    <div>
                        <label for="lastName" class="block text-gray-700 text-sm mb-1">Last Name</label>
                        <input type="text" id="lastName" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="info.">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="billingEmail" class="block text-gray-700 text-sm mb-1">Billing Email Address</label>
                    <input type="email" id="billingEmail" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="companyName" class="block text-gray-700 text-sm mb-1">Company Name</label>
                    <input type="text" id="companyName" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="vatNumber" class="block text-gray-700 text-sm mb-1">VAT number (Optional)</label>
                    <input type="text" id="vatNumber" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm mb-1">Phone (Optional)</label>
                    <input type="text" id="phone" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="locality" class="block text-gray-700 text-sm mb-1">Locality</label>
                    <input type="text" id="locality" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="country" class="block text-gray-700 text-sm mb-1">Country</label>
                    <select id="country" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16">
                        <option value="">User email or ID</option>
                        <!-- Add country options here -->
                    </select>
                </div>

                <div class="mb-4">
                    <label for="streetAddress" class="block text-gray-700 text-sm mb-1">Street Address</label>
                    <input type="text" id="streetAddress" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-6">
                    <label for="postalCode" class="block text-gray-700 text-sm mb-1">Postal Code</label>
                    <input type="text" id="postalCode" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <button class="w-56 bg-[#551895] text-white py-2 rounded-xl hover:bg-purple-800 transition-colors">Update Info.</button>
            </div>
        </div>
    </div>
</body>
</html>
