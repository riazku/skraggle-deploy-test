<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    
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
     @include('components.home_tab')
    </div>

</div>
    


<div class="w-[77%] mx-auto mt-45 ml-48" id="tab-content">

</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContentContainer = document.getElementById('tab-content'); // Corrected ID

        async function loadTabContent(route, tabId) {
            try {
                // Remove 'active' class and inactive styles from all buttons
                tabButtons.forEach(button => {
                    button.classList.remove('active', 'bg-[#551895]', 'text-white');
                    button.classList.add('bg-gray-200', 'text-gray-700');
                });

                // Add 'active' class and active styles to the clicked/default button
                const currentActiveButton = document.querySelector(`[data-tab-id="${tabId}"]`);
                if (currentActiveButton) {
                    currentActiveButton.classList.add('active', 'bg-[#551895]', 'text-white');
                    currentActiveButton.classList.remove('bg-gray-200', 'text-gray-700');
                }

                // Fetch the content
                const response = await fetch(route);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const content = await response.text(); // Get content as plain text (HTML)
                tabContentContainer.innerHTML = content; // Inject content into the container

            } catch (error) {
                console.error('Error loading tab content:', error);
                tabContentContainer.innerHTML = '<p class="text-red-500">Failed to load content. Please try again.</p>';
            }
        }

        // Add click event listeners to all tab buttons
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const route = button.dataset.contentRoute;
                const tabId = button.dataset.tabId;
                loadTabContent(route, tabId);
            });
        });

        // --- Set Default Tab on Page Load ---
        // Automatically load the 'overview' tab content on page load
        const defaultTabButton = document.getElementById('overview-button');
        if (defaultTabButton) {
            defaultTabButton.click(); // Simulate a click to load its content
        }
    });
</script>


</body>
</html>
