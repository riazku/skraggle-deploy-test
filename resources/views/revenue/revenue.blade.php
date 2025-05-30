<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <title>@yield('title', 'My Laravel App')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- @vite('resources/css/app.css') --}}
    

    
    <style>

      /* Custom styles for active tab */
      .tab-button.active {
        background-color: #551895; /* Example active background color */
        color: white; /* Example active text color */
      }
      </style>
</head>



<body>

<div class="h-screen">

    <div>
        @include('components.sidebar')
    </div>

     <div>>
        @include('components.header')
    </div>

    <div>
        @include('components.breadcums')
    </div>

    <div>
        @include('components.menu')
    </div>

    <div>
     @include('components.revenue_tab')
    </div>

</div>
    


    {{-- Main Content Wrapper --}}
    <div class=" w-[77%] mx-auto mt-45 ml-48" x-data="{ activeTab: 'email' }">
         <div id="tab-content" class="mt-4">
        </div>
    </div>
      
        {{-- @include('tabs.overview') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- @include('tabs.getting-started') --}}
        {{-- @include('tabs.cockpit') --}}

        {{-- Content Area --}}
        {{-- <div class="flex-1 mt-[195px] ml-[190px] p-2">
            @yield('content')
        {{-- Content Area --}}
    


        {{-- Main Content Area --}}
        {{-- <main class="flex-1 mt-[195px] ml-[190px] p-2">
            {{-- @include('components.container') --}}
             {{-- @include('components.overview') --}}
            @yield('content')
            
        </main> 
    </div>

    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContent = document.getElementById('tab-content');

        // Function to load content
        const loadTabContent = async (url, buttonId) => {
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const content = await response.text();
                tabContent.innerHTML = content;

                // Update active button styling
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-[#551895]', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                document.getElementById(buttonId).classList.add('active', 'bg-[#551895]', 'text-white');
                document.getElementById(buttonId).classList.remove('bg-gray-200', 'text-gray-700');

            } catch (error) {
                console.error('Error loading tab content:', error);
                tabContent.innerHTML = `<p class="text-red-500">Failed to load content. Please try again.</p>`;
            }
        };

        // Add click listeners to tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const contentUrl = button.dataset.contentRoute;
                const buttonId = button.id;
                loadTabContent(contentUrl, buttonId);
            });
        });

        // Load default tab content on initial page load (e.g., Overview)
        const defaultTabButton = document.getElementById('revenue-campaign-tab');
        if (defaultTabButton) {
            loadTabContent(defaultTabButton.dataset.contentRoute, defaultTabButton.id);
        }
    });
</script>

</body>
</html>
