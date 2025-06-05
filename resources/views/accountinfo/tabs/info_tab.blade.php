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
            <button class="px-4 py-1 rounded bg-[#CABCF8] text-[#551895]">Info</button>
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Notification</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">Integration Code</button>
            
            <button class="px-4 py-1 rounded text-gray-700 border border-gray-300 hover:bg-gray-200">API Key & Account ID</button>



 

        </div>    --}}
    

        <p class="text-sm text-gray-700 mb-4 col-span-2">The following settings will be applied to all product recommendation blocks. You can overwrite them in campaigns.</p>


        <!-- Info Settings Content -->
        <div class="mt-8 p-6 bg-[#EEEAFF] rounded-lg grid grid-cols-2 gap-6">
            <!-- Left Column -->
            <div>

                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Tittle</label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                    <div class="mt-1">
                        <input type="text" name="url" id="url" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="Event JSON">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="company-info" class="block text-sm font-medium text-gray-700">Company Info.</label>
                    <div class="mt-1">
                        <input type="text" name="company-info" id="company-info" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder:p-3 rounded bg-white" placeholder="Event JSON">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="logo" class="block text-sm font-medium text-gray-700 ">Logo</label>
                    <div class="mt-1 flex items-center rounded bg-white">
                        <input type="text" name="logo" id="logo" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-l-md placeholder:p-3 rounded bg-white" placeholder="User email or ID">
                        <button type="button" class="ml-[-1px] px-4 py-2 border border-gray-300 rounded-r-md bg-gray-50 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-purple-500 focus:border-purple-500 flex items-center justify-center">
                            Upload <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                              </svg>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Are you an ecommerce business?</label>
                    <div class="flex items-center">
                        <input id="ecommerce-yes" name="ecommerce" type="radio" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 " checked>
                        <label for="ecommerce-yes" class="ml-2 block text-sm text-gray-900">Yes</label>
                        <input id="ecommerce-no" name="ecommerce" type="radio" class="ml-4 focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300">
                        <label for="ecommerce-no" class="ml-2 block text-sm text-gray-900">No</label>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="platform" class="block text-sm font-medium text-gray-700">Platform</label>
                    <div class="mt-1">
                        <select id="platform" name="platform" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>User email or ID</option>
                        </select>
                    </div>
                </div>

                <div class="mt-10">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Save Changes
                    </button>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <div class="mb-6">
                    <label for="time-zone" class="block text-sm font-medium text-gray-700">Time zone</label>
                    <div class="mt-1">
                        <select id="time-zone" name="time-zone" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>User email or ID</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="date-format" class="block text-sm font-medium text-gray-700">Date Format</label>
                    <div class="mt-1">
                        <select id="date-format" name="date-format" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                    <div class="mt-1">
                        <select id="language" name="language" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                    <div class="mt-1">
                        <select id="country" name="country" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
                    <div class="mt-1">
                        <select id="currency" name="currency" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>US Dollar</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6 flex justify-between items-center">
                    <label class="block text-sm font-medium text-gray-700">Convert purchase total value</label>
                    <div class="flex items-center">
                        <input id="convert-yes" name="convert" type="radio" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300" checked>
                        <label for="convert-yes" class="ml-2 block text-sm text-gray-900">Yes</label>
                        <input id="convert-no" name="convert" type="radio" class="ml-4 focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300">
                        <label for="convert-no" class="ml-2 block text-sm text-gray-900">No</label>
                    </div>
                </div>

                <div class="mb-6 grid grid-cols-3 gap-4">
                    <div>
                        <label for="before-price" class="block text-sm font-medium text-gray-700">Before Price</label>
                        <div class="mt-1">
                            <select id="before-price" name="before-price" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                                <option>US Dollar</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="after-price" class="block text-sm font-medium text-gray-700">After Price</label>
                        <div class="mt-1">
                            <select id="after-price" name="after-price" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                                <option>US Dollar</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="price-format" class="block text-sm font-medium text-gray-700">Price Format</label>
                        <div class="mt-1 flex items-center">
                            <select id="price-format" name="price-format" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-l-md p-3 rounded bg-white">
                                <option>US Dollar</option>
                            </select>
                            <input type="text" class="ml-[-1px] shadow-sm focus:ring-purple-500 focus:border-purple-500 block w-1/3 sm:text-sm border-gray-300 rounded-r-md placeholder:p-3 text-right rounded bg-purple-600 w-auto h-5" value="124.45">
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Add Data Import
                    </button>
                </div>

                <div class="mb-6">
                    <label for="truncate-titles" class="block text-sm font-medium text-gray-700">Truncate Product Tittles</label>
                    <div class="mt-1">
                        <select id="truncate-titles" name="truncate-titles" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="truncate-descriptions" class="block text-sm font-medium text-gray-700">Truncate Product Descriptions</label>
                    <div class="mt-1">
                        <select id="truncate-descriptions" name="truncate-descriptions" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="truncate-suffix" class="block text-sm font-medium text-gray-700">Truncate Suffix</label>
                    <div class="mt-1">
                        <select id="truncate-suffix" name="truncate-suffix" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="privacy-url" class="block text-sm font-medium text-gray-700">Privacy Policy Page URL</label>
                    <div class="mt-1">
                        <select id="privacy-url" name="privacy-url" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="terms-url" class="block text-sm font-medium text-gray-700">Terms & Conditions Page URL</label>
                    <div class="mt-1">
                        <select id="terms-url" name="terms-url" class="shadow-sm h-14 focus:ring-purple-500 focus:border-purple-500 block w-full sm:text-sm border-gray-300 rounded-md p-3 rounded bg-white">
                            <option>Event JSON</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>