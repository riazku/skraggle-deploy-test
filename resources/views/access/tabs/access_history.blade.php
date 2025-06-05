<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access</title>

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

    <div class="container mx-auto p-6 ">
    
        <!-- Table -->
        <div class="shadow-md">
            <table class="min-w-full border-separate border-spacing-y-2 rounded-lg overflow-hidden">
                <thead class="bg-[#DDD7F5]">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-[#551895] uppercase tracking-wider rounded-tl-lg">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <span class="ml-2">History Log</span>
                                <!-- Sort icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-[#551895]" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-semibold text-[#551895] uppercase tracking-wider rounded-tr-lg">
                             <div class="flex items-center justify-end">
                                 <span>Roles</span>
                                 <!-- Sort icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 text-[#551895]" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                             </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white   ">
                    <!-- Sample Row -->
                    <tr>
                        <td class="px-6  whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-[#551895] rounded border-gray-300">
                                <div class="ml-4 flex items-center">
                                    <div class="text-sm font-medium text-gray-900">someone@gmail.com</div>
                                     <span class="ml-4 px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-[#CABCF8] text-[#551895]">Admin</span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <select class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-[#AD94FF] focus:border-[#AD94FF] sm:text-sm">
                                <option>Admin</option>
                                <!-- Add other role options here -->
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Roles Definition Section -->
        <div class="mt-6">
            <h3 class="text-lg font-bold text-gray-700">Roles Definition</h3>
            
            <!-- Add roles definition content here -->
        </div>


</div>
    
</body>
</html>