<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

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
<body>
    <div class="container mx-auto p-6">
        <div class="flex space-x-4">
            <!-- Profile Section -->
            <div class="w-1/2 bg-[#EEEAFF] p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-[#551895] mb-4">Profile</h2>
                <p class="text-gray-700 font-bold text-xs mb-4">Do you want to join our Whatsapp/Telegram private groups? Leave us your phone number/message below</p>
                
                <div class="mb-4">
                    <textarea class="w-full p-2 rounded-lg h-24 bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF]" placeholder="User email or ID"></textarea>
                </div>

                <button class="bg-[#551895] text-white py-2 px-4 rounded-md hover:bg-purple-800 transition-colors mb-6">Send</button>

                <p class="text-gray-700 text-sm mb-2">Receive informational emails?</p>
                <div class="flex items-center space-x-4 mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-[#551895]" name="informationalEmails" value="yes">
                        <span class="ml-2 text-gray-700 text-sm">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-[#551895]" name="informationalEmails" value="no" checked>
                        <span class="ml-2 text-gray-700 text-sm">No</span>
                    </label>
                </div>
                <p class="text-gray-600 flex justify-end text-xs mb-4">Selecting NO will still send you account related emails.</p>

                <div class="mb-6">
                    <label for="language" class="block text-gray-700 text-sm mb-1">Language used in dashboard</label>
                    <select id="language" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16">
                        <option value="">info.</option>
                    </select>
                </div>

                <button class="w-36 bg-[#551895] text-white py-2 rounded-xl hover:bg-purple-800 transition-colors">Update Info.</button>
            </div>

            <!-- Security Section -->
            <div class="w-1/2 bg-[#EEEAFF] p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-[#551895] mb-4">Security</h2>
                
                <div class="mb-4">
                    <label for="yourEmail" class="block text-gray-700 text-sm mb-1">Your Email</label>
                    <input type="email" id="yourEmail" class="w-full p-2 rounded-lg bg-white focus:outline-none h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="newPassword" class="block text-gray-700 text-sm mb-1">New Password</label>
                    <input type="password" id="newPassword" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <div class="mb-4">
                    <label for="confirmPassword" class="block text-gray-700 text-sm mb-1">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="w-full p-2 rounded-lg bg-white focus:outline-none focus:ring-1 focus:ring-[#AD94FF] h-16" placeholder="User email or ID">
                </div>

                <p class="text-gray-700 text-sm mb-4">Two Factor Authentication adds another layer of security to your account. When enabled, you will need to login both with your password and a one-time verification code from your mobile app.</p>

                 <div class="flex items-center mb-6">
                    <label for="twoFactor" class="flex items-center cursor-pointer">
                        <div class="relative">
                            <input type="checkbox" id="twoFactor" class="sr-only">
                            <div class="block bg-gray-300 w-14 h-8 rounded-full"></div>
                            <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                        </div>
                        <div class="ml-3 text-gray-700 font-medium hidden">Toggle</div>
                    </label>
                </div>

                <button class="w-36 bg-[#551895] text-white py-2 rounded-xl hover:bg-purple-800 transition-colors">Update Info.</button>
            </div>
        </div>
</body>
</html>
