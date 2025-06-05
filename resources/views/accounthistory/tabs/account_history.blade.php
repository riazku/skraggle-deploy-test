<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access History</title>
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
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-purple-100">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-purple-900 uppercase tracking-wider">
                            History Log
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-purple-900 uppercase tracking-wider">
                            Created at
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample Row 1 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Donation to Campaign ID-300434DFD</div>
                                    <div class="text-sm text-gray-500">Here can be texts that may shed details on the group.</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            22/10/2022
                        </td>
                    </tr>
                    <!-- Sample Row 2 -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <input type="checkbox" class="form-checkbox">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">Donation to Campaign ID-300434DFD</div>
                                    <div class="text-sm text-gray-500">Here can be texts that may shed details on the group.</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            22/10/2022
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>