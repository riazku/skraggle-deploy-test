<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automation Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" h-screen overflow-hidden">
    <!-- Main Container -->
    <div class="flex h-full">
        <!-- Left Sidebar -->
        
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            
            <!-- Content Area -->
            <div class="flex-1">
                <!-- Breadcrumb -->
                {{-- <div class="px-6 py-4 bg-white ">
                    <nav class="text-sm">
                        <span class="text-gray-500">Contacts</span>
                        <span class="text-gray-400 mx-2">/</span>
                        <span class="text-gray-700">All Contacts</span>
                    </nav>
                </div> --}}
                
                <!-- Tabs -->
                {{-- <div class="px-6 pt-4">
                          <div class="flex space-x-2 mb-6">
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-3 py-1" data-page="Catalog.html">
                      <a href="Catalog.html">Catalog</a>
                    </button>
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-3 py-1" data-page="Parsing.html">
                      <a href="Parsing.html">Parsing</a>
                    </button>
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-3 py-1" data-page="AutoFeed.html">
                      <a href="AutoFeed.html">Auto Feed</a>
                    </button>
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-3 py-1" data-page="Preview.html">
                      <a href="Preview.html">Preview</a>
                    </button>
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-4 py-1 text-sm" data-page="Export.html">
                      <a href="Export.html">Export</a>
                    </button>
                    <button class="nav-button font-bold border border-[#CFD5DF80] rounded-md px-3 py-1" data-page="DataFeeds.html">
                      <a href="DataFeeds.html">Data Feeds</a>
                    </button>
                  </div>
                </div> --}}
                
                <!-- Preview Content -->
                <div class="px-6 py-6">
                    <p class="text-gray-600 text-sm mb-6">Preview feed parse below, before uploading current settings</p>
                    <div class="w-auto h-[320px] rounded-[6px] border border-[#EEEAFF] p-3 bg-[#D6CEFA]"></div>
                    
                    <button class="bg-purple-600 text-white px-4 py-2 rounded text-sm font-medium hover:bg-purple-700 mt-10">
                        Preview Products
                    </button>
                </div>
            </div>
        </div>
    </div>
{{-- <script>
  const currentPage = window.location.pathname.split('/').pop(); // e.g., Parsing.html

  document.querySelectorAll('.nav-button').forEach(button => {
    const page = button.getAttribute('data-page');

    if (page === currentPage) {
      // Active styling (Catalog look)
      button.classList.add('bg-[#CABCF8]', 'text-[#551895]');
    } else {
      // Default style
      button.classList.add('bg-white', 'text-gray-700');
    }
  });
</script> --}}


</body>
</html>