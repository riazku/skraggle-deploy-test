<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Settings</title>
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

    <div class="container mx-auto p-5">
        <p class="text-gray-600 text-sm mb-8">Chronological account activity. Logs older than 30 days are automatically deleted.</p>

        <div class="flex flex-wrap -mx-4">

            <!-- Left Column -->
            <div class="w-1/2 px-4 mb-8">

                <!-- Email Provider Section -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-8">
                    <h2 class="text-lg font-semibold text-purple-900 mb-4">Email Provider</h2>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <label for="provider-name-1" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-name-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Default">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                            </div>
                            <div class="flex-1">
                                <label for="provider-type-1" class="block text-sm font-medium text-gray-700">Type</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-type-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Sparkpostapi">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                            </div>
                             <div class="flex-1">
                                <label for="provider-default-1" class="block text-sm font-medium text-gray-700">Default</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-default-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Set Default">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                             </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <label for="provider-name-2" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-name-2" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Default">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                            </div>
                            <div class="flex-1">
                                <label for="provider-type-2" class="block text-sm font-medium text-gray-700">Type</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-type-2" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Sparkpostapi">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                            </div>
                             <div class="flex-1">
                                <label for="provider-default-2" class="block text-sm font-medium text-gray-700">Default</label>
                                <div class="flex items-center bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="provider-default-2" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm" value="Set Default">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-[#AD94FF]">Add Email Provider</button>
                </div>

                <!-- Sending Emails Section -->
                 <div class="bg-purple-100 p-6 rounded-lg shadow-md mb-8">
                    <h2 class="text-lg font-semibold text-purple-900 mb-4">Sending Emails to Default Infrastructures</h2>
                     <div class="space-y-4">
                        <div class="flex items-center justify-between space-x-4">
                             <div class="">
                                <label for="sending-name-1" class="block text-sm font-medium text-gray-700">Name</label>
                                 <div class="flex items-center bg-white w-[145%] rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="sending-name-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded bg-white" value="biggorillatech.com">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                              </div>
                              <div class="">
                                 <label for="sending-default-1" class="block text-sm font-medium text-gray-700">Default</label>
                                 <div class="flex items-center w-[100%] bg-white rounded-md shadow-sm border border-gray-300">
                                    <input type="text" id="sending-default-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded bg-white" value="Verify">
                                    <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                                </div>
                              </div>
                           </div>
                           <div class="flex items-center justify-between space-x-4">
                            <div class="">
                               <label for="sending-name-1" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="flex items-center bg-white w-[145%] rounded-md shadow-sm border border-gray-300">
                                   <input type="text" id="sending-name-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded bg-white" value="biggorillatech.com">
                                   <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                               </div>
                             </div>
                             <div class="">
                                <label for="sending-default-1" class="block text-sm font-medium text-gray-700">Default</label>
                                <div class="flex items-center w-[100%] bg-white rounded-md shadow-sm border border-gray-300">
                                   <input type="text" id="sending-default-1" class="block w-full h-10 px-3 py-2 rounded-l-md focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded bg-white" value="Verify">
                                   <button class="p-2 border-l border-gray-300 text-gray-700 hover:text-purple-900 hover:border-purple-500 focus:outline-none focus:ring-purple-500 focus:border-purple-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.922-8.922zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                               </div>
                             </div>
                          </div>
                       </div>
                </div>

                <!-- Email Limits Section -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md">
                     <h2 class="text-lg font-semibold text-purple-900 mb-4">Email Limits</h2>
                     <p class="text-gray-600 text-sm mb-4">New accounts have limits to make sure you have permission for sending emails to the list.</p>
                     <div class="flex space-x-4">
                        <div class="flex-1 bg-red-200 text-center py-2 rounded">1000</div>
                        <div class="flex-1 bg-purple-300 text-center py-2 rounded border-2 border-purple-500">10,000</div>
                        <div class="flex-1 bg-green-200 text-center py-2 rounded">10,0000</div>
                     </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="w-1/2 px-4 mb-8">

                 <!-- Default Email Settings Section -->
                <div class="bg-purple-100 p-6 rounded-lg shadow-md">
                     <h2 class="text-lg font-semibold text-purple-900 mb-4">Default Email Settings</h2>
                     <div class="mb-4">
                        <label for="default-name" class="block text-sm font-medium text-gray-700">Default Name</label>
                        <input type="text" id="default-name" class="mt-1 block w-full h-16 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm rounded bg-white p-5" value="biggorilla">
                    </div>
                     <div class="mb-4">
                        <label for="default-from-email" class="block text-sm font-medium text-gray-700">Default From Email</label>
                        <input type="text" id="default-from-email" class="mt-1 block w-full h-16 border-gray-300 rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm bg-white p-5" placeholder="Address">
                    </div>
                      <div class="mb-4">
                        <label for="default-reply-to" class="block text-sm font-medium text-gray-700">Default Reply to Email Address</label>
                         <select id="default-reply-to" class="mt-1 block w-full h-16 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                            <option>Event JSON</option>
                            <!-- Add other options here -->
                        </select>
                    </div>
                     <div class="mb-4">
                        <label for="default-street-address" class="block text-sm font-medium text-gray-700">Default Street Address</label>
                         <select id="default-street-address" class="mt-1 block w-full h-16 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500 sm:text-sm">
                            <option>Event JSON</option>
                            <!-- Add other options here -->
                        </select>
                    </div>

                    <button class="mt-4 w-full px-4 py-2 bg-purple-800 text-white rounded-md hover:bg-[#AD94FF]">Update</button>
                </div>

            </div>

        </div>

    </div>

</body>
</html>