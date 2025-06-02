<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Laravel App</title>

</head>



<body>
    <header class="fixed top-0 right-0 left-20 w-auto bg-white z-30">
        {{-- Header Navigation --}}
        <nav class="px-4 py-5">
            <div class="flex items-center justify-between">
                {{-- Left Section: Search Bar --}}
                <div class="relative flex items-center">
                    <span class="absolute left-3 text-gray-400 hover:text-purple-500 transition-colors">
                        <img src="{{ asset('images/IconText.svg') }}" alt="Search" class="w-5 h-5">
                        
                    </span>
                    <input
                        type="text"
                        placeholder="Search"
                        class="pl-10 pr-4 py-2 rounded-full bg-purple-50 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-300 focus:bg-white transition-all duration-200 w-64 hover:bg-purple-100"
                    />
                </div>

                {{-- Right Section --}}
                <div class="flex items-center space-x-2">
                    {{-- Language Selector --}}
                  <div class="relative">
                    <button onclick="toggleLanguageDropdown()" class="bg-purple-50 text-purple-700 px-4 py-2 rounded-full flex items-center space-x-2 text-sm font-medium hover:bg-purple-100 transition-colors duration-200">
                        <span>ENG</span>
                        <svg class="w-4 h-4 text-purple-700 transition-transform duration-200" 
                             :class="{'rotate-180': isOpen}"
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                        <path stroke-linecap="round" 
                              stroke-linejoin="round" 
                              stroke-width="2" 
                              d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    {{-- Language Dropdown Menu --}}
                    <div id="languageDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-1">
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700">
                                GER
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700">
                                ESP
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700">
                                FAR
                            </a>
                      
                        </div>
                    </div>
                  </div>

                    {{-- Notification Icon --}}
                    <div class="relative">
                        <button onclick="toggleNotificationDropdown()" class="bg-purple-50 text-purple-700 p-2.5 rounded-full flex items-center justify-center hover:bg-purple-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-purple-300">
                            <img src="{{ asset('images/Group 21538.svg') }}" alt="Notifications" class="w-5 h-5">
                        </button>
                        <span class="absolute -top-1 -right-1 block h-2.5 w-2.5 rounded-full bg-purple-500 ring-2 ring-white"></span>

                        {{-- Notification Dropdown --}}
                        <div id="notificationDropdown" class="absolute right-0 mt-2 w-96 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                            <div class="p-4 border-b border-gray-100">
                                <h3 class="text-lg font-semibold text-gray-900">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                {{-- Notification Items --}}
                                <div class="p-4 hover:bg-purple-50 border-b border-gray-100 cursor-pointer">
                                    <div class="flex items-start gap-3">
                                        <div class="flex-shrink-0">
                                            <span class="inline-block p-2 bg-purple-100 rounded-full">
                                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-900">New message received</p>
                                            <p class="text-sm text-gray-500 mt-1">John Doe sent you a message</p>
                                            <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="h-2 w-2 bg-purple-500 rounded-full"></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Add more notification items here --}}
                            </div>
                            <div class="p-4 border-t border-gray-100">
                                <a href="#" class="block text-center text-sm text-purple-600 hover:text-purple-700 font-medium">
                                    View all notifications
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="relative">
                      <button onclick="toggleProfileDropdown()" class="bg-purple-50 text-purple-700 px-3 py-2 rounded-full flex items-center space-x-2 text-sm font-medium hover:bg-purple-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-purple-300">
                          <img src="{{ asset('images/Profile.png') }}" alt="User Avatar" class="w-7 h-7 rounded-full object-cover ring-2 ring-white">
                          <span>Tim Joka</span>
                          <svg class="w-4 h-4 text-purple-700 transition-transform duration-200" 
                              :class="{'rotate-180': isOpen}"
                              fill="none" 
                              stroke="currentColor" 
                              viewBox="0 0 24 24">
                              <path stroke-linecap="round" 
                                    stroke-linejoin="round" 
                                    stroke-width="2" 
                                    d="M19 9l-7 7-7-7" />
                          </svg>
                      </button>

                      {{-- Profile Dropdown Menu --}}
                      <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                          <div class="py-1">
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700">
                                  Profile
                              </a>
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700">
                                  Settings
                              </a>
                              <div class="border-t border-gray-100 my-1"></div>
                              <a href="#" class="flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                  Sign out
                              </a>
                          </div>
                      </div>
                  </div>





                    


                </div>
            </div>
        </nav>
    </header>

    {{-- Add margin-top to prevent content from going under fixed header --}}
    <main class="mt-16">
        {{-- Your main content goes here --}}
    </main>


    <script>
        function toggleLanguageDropdown() {
            const dropdown = document.getElementById('languageDropdown');
            const button = event.currentTarget;
            const svg = button.querySelector('svg');
            
            dropdown.classList.toggle('hidden');
            svg.classList.toggle('rotate-180');
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.relative')) {
                    dropdown.classList.add('hidden');
                    svg.classList.remove('rotate-180');
                }
            });
        }

        function toggleProfileDropdown() {
        const dropdown = document.getElementById('profileDropdown');
        const button = event.currentTarget;
        const svg = button.querySelector('svg');
        
        dropdown.classList.toggle('hidden');
        svg.classList.toggle('rotate-180');
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                dropdown.classList.add('hidden');
                svg.classList.remove('rotate-180');
            }
        });
    }

    function toggleNotificationDropdown() {
        const dropdown = document.getElementById('notificationDropdown');
        const button = event.currentTarget;
        
        dropdown.classList.toggle('hidden');
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                dropdown.classList.add('hidden');
            }
        });
    }
    </script>
</body>
</html>