<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Laravel App</title>
</head>
<body>
    <div class="fixed top-[70px] left-[96px] w-[220px]">

        <div class="px-4 py-4">
            <h2 class="text-lg font-semibold text-[#551895]">AUTOMATION</h2>
        </div>

        <nav class="mt-2 bg-purple-100 rounded-lg" x-data="{ openMenu: '' }">

            

             <!-- Vertical Lines SVG -->
            <div class="absolute right-[-2px] top-[55%]">
                <svg width="13" height="32" viewBox="0 0 8 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="6.75" y1="0" x2="6.75" y2="27" stroke="#551895" stroke-width="1.5"/>
                    <line x1="3.75" y1="6" x2="3.75" y2="21" stroke="#551895" stroke-width="1.5"/>
                    <line x1="0.75" y1="10" x2="0.75" y2="18" stroke="#551895" stroke-width="1.5"/>
                </svg>
            </div>

            <ul class="space-y-1 p-3">
                <!-- Dashboard -->
                <li class="px-2">
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm text-[#551895] bg-[#551895] text-white rounded-lg">
                        Dashboard
                    </a>
                </li>


                <!-- Campaigns -->
                <li class="relative px-1">
                    <button @click="openMenu = openMenu === 'campaigns' ? '' : 'campaigns'" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm text-[#551895] hover:bg-gray-50 rounded-lg">
                        <span>Campaigns</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'campaigns'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'campaigns'"
                        x-transition
                        class="px-4 py-2 bg-[#551895] rounded-lg mt-1">
                        <li><a href="{{ route('campaigns.campaigns') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Scenarios</a></li>
                        <li><a href="{{ route('automation.automation') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Automation</a></li>
                        <li><a href="{{ route('newsletter.newsletter') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Newsletter</a></li>
                        <li><a href="{{ route('recurring.recurring') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Recurring</a></li>
                        <li><a href="{{ route('interaction.interaction') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Interaction</a></li>
                        <li><a href="{{ route('content.content') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Content</a></li>
                        <li><a href="{{ route('micropoll.micropoll') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Micro Poll</a></li>
                        <li><a href="{{ route('survey.survey') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Survey</a></li>
                    </ul>
                </li>

                <!-- Reports -->
                <li class="relative px-2">
                    <button @click="openMenu = openMenu === 'reports' ? '' : 'reports'" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm text-[#551895] hover:bg-white rounded-lg">
                        <span>Reports</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'reports'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'reports'"
                        x-transition
                        class="px-4 py-2 bg-[#551895] rounded-lg mt-1">
                        <li><a href="{{ route('user.user') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Users</a></li>
                        <li><a href="{{ route('revenue.revenue') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Revenue</a></li>
                        <li><a href="{{ route ('siteactivity.siteactivity')}}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Site Activity</a></li>
                        <li><a href=" {{ route('emailactivity.emailactivity') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Email Activity</a></li>
                        <li><a href="{{ route('ecommerce.ecommerce') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Ecommerce</a></li>
                        <li><a href="{{ route('catalog.catalog') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Catalog</a></li>
                        <li><a href="{{ route('export.export') }}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Exports</a></li>
                    
                    </ul>
                </li>

                <!-- Users -->
                <li class="relative px-2">
                    <button @click="openMenu = openMenu === 'users' ? '' : 'users'" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm text-[#551895] hover:bg-white rounded-lg">
                        <span>Users</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'users'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'users'"
                        x-transition
                        class="px-4 py-2 bg-[#551895] rounded-lg mt-1">
                        <li><a href="{{ route('segmentslists.segmentslists')}}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Segments & Lists</a></li>
                        <li><a href="{{ route ('userprofile.userprofile')}}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">User Profile CRM</a></li>
                        
                        <li><a href="{{ route ('analytics.analytics')}}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Analytics</a></li>
                        <li><a href="{{route('importuser.importuser')}}" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Import Users</a></li>
                        
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Settings</a></li>
                       
                    </ul>
                    
                </li>

                <!-- Setup -->
                <li class="relative px-2">
                    <button @click="openMenu = openMenu === 'setup' ? '' : 'setup'" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm text-[#551895] hover:bg-white rounded-lg">
                        <span>Setup</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'setup'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'setup'"
                        x-transition
                        class="px-4 py-2 bg-[#551895] rounded-lg mt-1">
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Catalog</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Gallery</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Cuppon Codes</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">WebPush</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Activity Feed</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Data Import</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Pages</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Integrations</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Algorithms</a></li>
                    </ul>
                </li>

                <!-- Settings -->
                <li class="relative px-2">
                    <button @click="openMenu = openMenu === 'settings' ? '' : 'settings'" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm text-[#551895] hover:bg-white rounded-lg">
                        <span>Settings</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'settings'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'settings'"
                        x-transition
                        class="px-4 py-2 bg-[#551895] rounded-lg mt-1">
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Account Info</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Account Settings</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Account History</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Configuration</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Email Settings</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Access</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">My Profile</a></li>
                        <li><a href="#" class="block text-sm text-white hover:bg-purple-700 p-2.5 rounded">Bilings</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

   
    <!-- Add Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('menuData', () => ({
                openMenu: '',
                toggleMenu(menuName) {
                    this.openMenu = this.openMenu === menuName ? '' : menuName;
                },
                isOpen(menuName) {
                    return this.openMenu === menuName;
                },
                init() {
                    // Close menu when clicking outside
                    document.addEventListener('click', (e) => {
                        if (!e.target.closest('nav')) {
                            this.openMenu = '';
                        }
                    });
                }
            }));
        });
    </script>
</body>
</html>