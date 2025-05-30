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
                        <button class="bg-purple-50 text-purple-700 p-2.5 rounded-full flex items-center justify-center hover:bg-purple-100 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-purple-300">
                            <img src="{{ asset('images/Group 21538.svg') }}" alt="Notifications" class="w-5 h-5">
                        </button>
                        <span class="absolute -top-1 -right-1 block h-2.5 w-2.5 rounded-full bg-purple-500 ring-2 ring-white"></span>
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
    </script>
</body>
</html>