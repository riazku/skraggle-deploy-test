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
     @include('components.newsletter_tab')
    </div>

</div>
    


    {{-- Main Content Wrapper --}}
    <div class=" w-[77%] mx-auto mt-45 ml-48">
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

    
    {{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContent = document.getElementById('tab-content');

        // Enhanced loadTabContent function with better error handling
        const loadTabContent = async (url, buttonId) => {
            try {
                // Show loading state
                tabContent.innerHTML = '<p class="text-gray-600">Loading...</p>';
                
                console.log('Loading URL:', url); // Debug log
                
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const content = await response.text();
                
                if (!content.trim()) {
                    throw new Error('Received empty content');
                }
                
                tabContent.innerHTML = content;

                // Update active button styling
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-[#551895]', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-700');
                });
                
                const activeButton = document.getElementById(buttonId);
                if (activeButton) {
                    activeButton.classList.add('active', 'bg-[#551895]', 'text-white');
                    activeButton.classList.remove('bg-gray-200', 'text-gray-700');
                }

            } catch (error) {
                console.error('Error loading tab content:', error);
                tabContent.innerHTML = `
                    <div class="p-4 text-red-500 bg-red-100 rounded">
                        <p class="font-bold">Error loading content:</p>
                        <p>${error.message}</p>
                        <p class="mt-2 text-sm">URL attempted: ${url}</p>
                    </div>`;
            }
        };

        // Add click listeners to tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const contentUrl = button.dataset.contentRoute;
                const buttonId = button.id;
                
                if (!contentUrl) {
                    console.error('No content route found for button:', buttonId);
                    return;
                }
                
                loadTabContent(contentUrl, buttonId);
            });
        });

        // Load default tab content
        const defaultTabButton = document.getElementById('email-tab');
        if (defaultTabButton) {
            const defaultUrl = defaultTabButton.dataset.contentRoute;
            if (defaultUrl) {
                loadTabContent(defaultUrl, 'email-tab');
            } else {
                console.error('No content route found for default tab');
            }
        }
    });
</script> --}}

<script src="{{ asset('js/tabs.js') }}"></script>

</body>
</html>
