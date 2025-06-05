<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrations Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-sm">
        <!-- Header -->
        <div class="p-6">
            <h1 class="text-2xl text-[#551895]">Integrations</h1>
            <p class="text-gray-600 pt-2">
                Please check file format to match our documentation. Once imported, you can not remove import effects.
            </p>
        </div>

        <!-- Content Area -->
        <div class="flex mt-4">
            <!-- Sidebar -->
            <div class="w-48 h-[300px] bg-[#EEEAFF] p-4 rounded-lg ml-2 mt-2 px-2">
                  <nav class="space-y-2">
                    <a href="#" class="block px-4 py-2 text-purple-700 bg-purple-200 rounded-md font-medium">
                        Google Analytics
                    </a>
                    <a href="#" class="block px-4 py-2 text-purple-700 hover:bg-purple-200 rounded-md">
                        Microsoft Clarity
                    </a>
                    <a href="#" class="block px-4 py-2 text-purple-700 hover:bg-purple-200 rounded-md">
                        Mailchimp
                    </a>
                    <a href="#" class="block px-4 py-2 text-purple-700 hover:bg-purple-200 rounded-md">
                        Profit Matrices
                    </a>
                    <a href="#" class="block px-4 py-2 text-purple-700 hover:bg-purple-200 rounded-md">
                        FTP Server
                    </a>
                    <a href="#" class="block px-4 py-2 text-purple-700 hover:bg-purple-200 rounded-md">
                        Text/SMS Provider
                    </a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 mt-2 px-5 pb-10">
                <!-- Google Analytics Section -->
                <div class="space-y-8">
                    <div class="bg-[#EEEAFF] p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-6">
                            Send site invites to Google Analytics.
                        </p>

                        <div class="mb-6">
                            <label class="block text-gray-700 mb-4">Enable Integration</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <span class="text-gray-700 mr-2">Yes</span>
                                    <input type="radio" name="enable_integration" value="yes" class="w-6 h-6 accent-purple-700 border-gray-300 ">
                                </label>
                                <label class="flex items-center">
                                    <span class="text-gray-700 mr-2">No</span>
                                    <input type="radio" name="enable_integration" value="no" checked class="w-6 h-6 accent-purple-700 text-purple-600 border-gray-300">
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label class="block text-gray-700 mb-4">Overwrite UTM source.</label>
                            <div class="flex items-center space-x-4">
                                <label class="flex items-center">
                                    <span class="text-gray-700 mr-2">Yes</span>
                                    <input type="radio" name="overwrite_utm" value="yes" class="w-6 h-6 accent-purple-700 border-gray-300">
                                </label>
                                <label class="flex items-center">
                                    <span class="text-gray-700 mr-2">No</span>
                                    <input type="radio" name="overwrite_utm" value="no" checked class="w-6 h-6 accent-purple-700 border-gray-300">
                                </label>
                            </div>
                        </div>

                        <button class="px-6 py-2 bg-[#551895] text-white font-medium rounded-md">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>