<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translation Interface</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div>
        <!-- Header Tabs -->
        {{-- <div class="flex ml-7">
            <button class="px-4 py-3 text-sm font-medium text-[#551895] bg-[#CABCF8] rounded-tl-lg">
                Translate Texts
            </button>
            <button class="px-4 py-3 text-sm font-medium text-gray-600 border ml-5">
                Custom Domain & Links
            </button>
        </div> --}}

        <!-- Content Area -->
        <div class="p-6">
            <!-- Warning Message -->
            <div class="mb-6 p-4 bg-yellow-50 border border-yellow-200 rounded-md max-w-2xl">
                <p class="text-sm text-yellow-700">
                    Translations are replaced by list pages. Please check and update at 
                    <a href="#" class="text-blue-600 underline">Setup List</a>
                </p>
            </div>

            <!-- Description -->
            <p class="text-gray-600 mb-6">
                Translate texts for your public pages. You can used dynamic tags.
            </p>

       <div class="space-y-6 bg-[#EEEAFF] p-5">
    <!-- Logo URL Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Logo_URL
        </label>
        <input 
            type="text"
            placeholder="Enter logo URL"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Title Error Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Title_Error
        </label>
        <input 
            type="text"
            placeholder="Enter title error"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Text Confirm Subscription Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            text_confirm_subscription
        </label>
        <input 
            type="text"
            placeholder="Enter confirmation text"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Text Confirm Unsub Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            text_confirm_unsub
        </label>
        <input 
            type="text"
            placeholder="Enter unsub confirmation"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Text Confirm Resub Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            text_confirm_resub
        </label>
        <input 
            type="text"
            placeholder="Enter resub confirmation"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Text Confirm Error Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            text_confirm_error
        </label>
        <input 
            type="text"
            placeholder="Enter error text"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Label Email Field -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            label_email
        </label>
        <input 
            type="text"
            placeholder="Enter email label"
            class="w-full h-14 px-3 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        />
    </div>

    <!-- Save Button -->
    <div class="mt-8">
        <button class="px-6 py-2 bg-[#551895] text-white font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
            Save
        </button>
    </div>
</div>


        </div>
    </div>
</body>
</html>