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

        <nav class="mt-2 bg-[#EEEAFF] rounded-lg" 
             x-data="{
                openMenu: localStorage.getItem('openMenu') || '',
                activeMenu: localStorage.getItem('activeMenu') || 'dashboard',
                activeChild: localStorage.getItem('activeChild') || '',
                init() {
                    // Update active menu based on current route
                    const currentPath = window.location.pathname;
                    const menuItems = {
                        'dashboard': '{{ route('home.home') }}',
                        'campaigns': ['{{ route('campaigns.campaigns') }}', '{{ route('automation.automation') }}', '{{ route('newsletter.newsletter') }}', '{{ route('recurring.recurring') }}', '{{ route('interaction.interaction') }}', '{{ route('content.content') }}', '{{ route('micropoll.micropoll') }}', '{{ route('survey.survey') }}'],
                        'reports': ['{{ route('user.user') }}', '{{ route('revenue.revenue') }}', '{{ route('siteactivity.siteactivity') }}', '{{ route('emailactivity.emailactivity') }}', '{{ route('ecommerce.ecommerce') }}', '{{ route('catalog.catalog') }}', '{{ route('export.export') }}'],
                        'users': ['{{ route('segmentslists.segmentslists') }}', '{{ route('userprofile.userprofile') }}', '{{ route('analytics.analytics') }}', '{{ route('importuser.importuser') }}', '{{ route('setting.settings') }}'],
                        'setup': ['{{ route('setup_catalog.setup') }}', '{{ route('gallery.gallery') }}', '{{ route('couponcodes.couponcodes') }}', '{{ route('webpush.webpush') }}', '{{ route('activityfeed.activityfeed') }}', '{{ route('dataimport.dataimport') }}', '{{ route('pages.pages') }}', '{{ route('integration.integration') }}', '{{ route('algorithms.algorithms') }}'],
                        'settings': ['{{ route('accountinfo.accountinfo')}}', '{{ route('accountsetting.accountsetting')}}', '{{ route('accounthistory.accounthistory')}}', '{{ route('emailsetting.emailsetting')}}', '{{ route('access.access')}}', '{{ route('myprofile.myprofile')}}', '{{ route('biling.biling')}}']
                    };
                    
                    // Check which menu should be active
                    for (const [menu, routes] of Object.entries(menuItems)) {
                        if (Array.isArray(routes)) {
                            if (routes.includes(currentPath)) {
                                this.activeMenu = menu;
                                this.openMenu = menu;
                                this.activeChild = currentPath;
                                localStorage.setItem('activeMenu', menu);
                                localStorage.setItem('openMenu', menu);
                                localStorage.setItem('activeChild', currentPath);
                                break;
                            }
                        } else if (routes === currentPath) {
                            this.activeMenu = menu;
                            localStorage.setItem('activeMenu', menu);
                            break;
                        }
                    }
                },
                setOpenMenu(menu) {
                    this.openMenu = this.openMenu === menu ? '' : menu;
                    this.activeMenu = menu;
                    localStorage.setItem('openMenu', this.openMenu);
                    localStorage.setItem('activeMenu', this.activeMenu);
                },
                setActiveChild(childRoute) {
                    this.activeChild = childRoute;
                    localStorage.setItem('activeChild', childRoute);
                },
                closeAllMenus() {
                    this.openMenu = '';
                    this.activeChild = '';
                    localStorage.setItem('openMenu', '');
                    localStorage.setItem('activeChild', '');
                }
             }">

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
                    <a href="{{ route('home.home') }}" 
                       @click="closeAllMenus(); activeMenu = 'dashboard'; localStorage.setItem('activeMenu', 'dashboard');"
                       class="flex items-center px-4 py-2.5 text-sm rounded-lg"
                       :class="{'bg-[#551895] text-white': activeMenu === 'dashboard', 'text-[#551895] hover:bg-white': activeMenu !== 'dashboard'}">
                        Dashboard
                    </a>
                </li>


                <!-- Campaigns -->
                <li class="relative px-1">
                    <button @click="setOpenMenu('campaigns')" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm rounded-lg"
                            :class="{'bg-[#551895] text-white': activeMenu === 'campaigns', 'text-[#551895] hover:bg-white': activeMenu !== 'campaigns'}">
                        <span>Campaigns</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'campaigns'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'campaigns'"
                        x-transition
                        class="px-1 py-2 bg-[#D6CEFA] rounded-lg mt-1">
                        <li><a href="{{ route('campaigns.campaigns') }}" @click="setActiveChild('{{ route('campaigns.campaigns') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('campaigns.campaigns') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('campaigns.campaigns') }}'}">Scenarios</a></li>
                        <li><a href="{{ route('automation.automation') }}" @click="setActiveChild('{{ route('automation.automation') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('automation.automation') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('automation.automation') }}'}">Automation</a></li>
                        <li><a href="{{ route('newsletter.newsletter') }}" @click="setActiveChild('{{ route('newsletter.newsletter') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('newsletter.newsletter') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('newsletter.newsletter') }}'}">Newsletter</a></li>
                        <li><a href="{{ route('recurring.recurring') }}" @click="setActiveChild('{{ route('recurring.recurring') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('recurring.recurring') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('recurring.recurring') }}'}">Recurring</a></li>
                        <li><a href="{{ route('interaction.interaction') }}" @click="setActiveChild('{{ route('interaction.interaction') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('interaction.interaction') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('interaction.interaction') }}'}">Interaction</a></li>
                        <li><a href="{{ route('content.content') }}" @click="setActiveChild('{{ route('content.content') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('content.content') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('content.content') }}'}">Content</a></li>
                        <li><a href="{{ route('micropoll.micropoll') }}" @click="setActiveChild('{{ route('micropoll.micropoll') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('micropoll.micropoll') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('micropoll.micropoll') }}'}">Micro Poll</a></li>
                        <li><a href="{{ route('survey.survey') }}" @click="setActiveChild('{{ route('survey.survey') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('survey.survey') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('survey.survey') }}'}">Survey</a></li>
                    </ul>
                </li>

                <!-- Reports -->
                <li class="relative px-2">
                    <button @click="setOpenMenu('reports')" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm rounded-lg"
                            :class="{'bg-[#551895] text-white': activeMenu === 'reports', 'text-[#551895] hover:bg-white': activeMenu !== 'reports'}">
                        <span>Reports</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'reports'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'reports'"
                        x-transition
                        class="px-1 py-2 bg-[#D6CEFA] rounded-lg mt-1">
                        <li><a href="{{ route('user.user') }}" @click="setActiveChild('{{ route('user.user') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('user.user') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('user.user') }}'}">Users</a></li>
                        <li><a href="{{ route('revenue.revenue') }}" @click="setActiveChild('{{ route('revenue.revenue') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('revenue.revenue') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('revenue.revenue') }}'}">Revenue</a></li>
                        <li><a href="{{ route ('siteactivity.siteactivity')}}" @click="setActiveChild('{{ route('siteactivity.siteactivity') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('siteactivity.siteactivity') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('siteactivity.siteactivity') }}'}">Site Activity</a></li>
                        <li><a href=" {{ route('emailactivity.emailactivity') }}" @click="setActiveChild('{{ route('emailactivity.emailactivity') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('emailactivity.emailactivity') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('emailactivity.emailactivity') }}'}">Email Activity</a></li>
                        <li><a href="{{ route('ecommerce.ecommerce') }}" @click="setActiveChild('{{ route('ecommerce.ecommerce') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('ecommerce.ecommerce') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('ecommerce.ecommerce') }}'}">Ecommerce</a></li>
                        <li><a href="{{ route('catalog.catalog') }}" @click="setActiveChild('{{ route('catalog.catalog') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('catalog.catalog') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('catalog.catalog') }}'}">Catalog</a></li>
                        <li><a href="{{ route('export.export') }}" @click="setActiveChild('{{ route('export.export') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('export.export') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('export.export') }}'}">Exports</a></li>
                    </ul>
                </li>

                <!-- Users -->
                <li class="relative px-2">
                    <button @click="setOpenMenu('users')" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm rounded-lg"
                            :class="{'bg-[#551895] text-white': activeMenu === 'users', 'text-[#551895] hover:bg-white': activeMenu !== 'users'}">
                        <span>Users</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'users'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'users'"
                        x-transition
                        class="px-1 py-2 bg-[#D6CEFA] rounded-lg mt-1">
                        <li><a href="{{ route('segmentslists.segmentslists')}}" @click="setActiveChild('{{ route('segmentslists.segmentslists') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('segmentslists.segmentslists') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('segmentslists.segmentslists') }}'}">Segments & Lists</a></li>
                        <li><a href="{{ route ('userprofile.userprofile')}}" @click="setActiveChild('{{ route('userprofile.userprofile') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('userprofile.userprofile') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('userprofile.userprofile') }}'}">User Profile CRM</a></li>
                        <li><a href="{{ route ('analytics.analytics')}}" @click="setActiveChild('{{ route('analytics.analytics') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('analytics.analytics') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('analytics.analytics') }}'}">Analytics</a></li>
                        <li><a href="{{route('importuser.importuser')}}" @click="setActiveChild('{{ route('importuser.importuser') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('importuser.importuser') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('importuser.importuser') }}'}">Import Users</a></li>
                        <li><a href="{{route ('setting.settings')}}" @click="setActiveChild('{{ route('setting.settings') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('setting.settings') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('setting.settings') }}'}">Settings</a></li>
                    </ul>
                </li>

                <!-- Setup -->
                <li class="relative px-2">
                    <button @click="setOpenMenu('setup')" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm rounded-lg"
                            :class="{'bg-[#551895] text-white': activeMenu === 'setup', 'text-[#551895] hover:bg-white': activeMenu !== 'setup'}">
                        <span>Setup</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'setup'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'setup'"
                        x-transition
                        class="px-1 py-2 bg-[#D6CEFA] mt-1 hide-scrollbar  max-h-[300px] overflow-y-auto h-[420px] mb-10 rounded-lg">
                        <li><a href="{{route ('setup_catalog.setup')}}" @click="setActiveChild('{{ route('setup_catalog.setup') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('setup_catalog.setup') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('setup_catalog.setup') }}'}">Catalog</a></li>
                        <li><a href="{{route ('gallery.gallery')}}" @click="setActiveChild('{{ route('gallery.gallery') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('gallery.gallery') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('gallery.gallery') }}'}">Gallery</a></li>
                        <li><a href="{{route ('couponcodes.couponcodes')}}" @click="setActiveChild('{{ route('couponcodes.couponcodes') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('couponcodes.couponcodes') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('couponcodes.couponcodes') }}'}">Cuppon Codes</a></li>
                        <li><a href="{{ route('webpush.webpush')}}" @click="setActiveChild('{{ route('webpush.webpush') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('webpush.webpush') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('webpush.webpush') }}'}">WebPush</a></li>
                        <li><a href="{{ route('activityfeed.activityfeed')}}" @click="setActiveChild('{{ route('activityfeed.activityfeed') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('activityfeed.activityfeed') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('activityfeed.activityfeed') }}'}">Activity Feed</a></li>
                        <li><a href="{{ route('dataimport.dataimport')}}" @click="setActiveChild('{{ route('dataimport.dataimport') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('dataimport.dataimport') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('dataimport.dataimport') }}'}">Data Import</a></li>
                        <li><a href="{{ route('pages.pages')}}" @click="setActiveChild('{{ route('pages.pages') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('pages.pages') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('pages.pages') }}'}">Pages</a></li>
                        <li><a href="{{ route('integration.integration')}}" @click="setActiveChild('{{ route('integration.integration') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('integration.integration') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('integration.integration') }}'}">Integrations</a></li>
                        <li><a href="{{ route('algorithms.algorithms')}}" @click="setActiveChild('{{ route('algorithms.algorithms') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('algorithms.algorithms') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('algorithms.algorithms') }}'}">Algorithms</a></li>
                    </ul>
                </li>

                <!-- Settings -->
                <li class="relative px-2">
                    <button @click="setOpenMenu('settings')" 
                            class="flex items-center justify-between w-full px-4 py-2.5 text-sm rounded-lg"
                            :class="{'bg-[#551895] text-white': activeMenu === 'settings', 'text-[#551895] hover:bg-white': activeMenu !== 'settings'}">
                        <span>Settings</span>
                        <svg class="w-4 h-4 transition-transform duration-200" 
                             :class="{'rotate-180': openMenu === 'settings'}"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul x-show="openMenu === 'settings'"
                        x-transition
                        class="px-1 py-2 bg-[#D6CEFA] mt-1 hide-scrollbar  max-h-[300px] overflow-y-auto h-[420px] mb-10 rounded-lg">
                          
                        <li><a href="{{ route('accountinfo.accountinfo')}}" @click="setActiveChild('{{ route('accountinfo.accountinfo') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('accountinfo.accountinfo') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('accountinfo.accountinfo') }}'}">Account Info</a></li>
                        <li><a href="{{ route('accountsetting.accountsetting')}}" @click="setActiveChild('{{ route('accountsetting.accountsetting') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('accountsetting.accountsetting') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('accountsetting.accountsetting') }}'}">Account Settings</a></li>
                        <li><a href="{{ route('accounthistory.accounthistory')}}" @click="setActiveChild('{{ route('accounthistory.accounthistory') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('accounthistory.accounthistory') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('accounthistory.accounthistory') }}'}">Account History</a></li>
                        
                        <li><a href="{{ route('emailsetting.emailsetting')}}" @click="setActiveChild('{{ route('emailsetting.emailsetting') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('emailsetting.emailsetting') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('emailsetting.emailsetting') }}'}">Email Settings</a></li>
                        <li><a href="{{ route('access.access')}}" @click="setActiveChild('{{ route('access.access') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('access.access') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('access.access') }}'}">Access</a></li>
                        <li><a href="{{ route('myprofile.myprofile')}}" @click="setActiveChild('{{ route('myprofile.myprofile') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('myprofile.myprofile') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('myprofile.myprofile') }}'}">My Profile</a></li>
                        <li><a href="{{ route('biling.biling')}}" @click="setActiveChild('{{ route('biling.biling') }}')" class="block text-sm text-[#551895] p-2.5 rounded-lg mb-6" :class="{'bg-[#EEEAFF] font-medium': activeChild === '{{ route('biling.biling') }}', 'hover:bg-[#EEEAFF]': activeChild !== '{{ route('biling.biling') }}'}">Bilings</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

   <style>
    .hide-scrollbar {
  scrollbar-width: none ; /* Firefox */
  -ms-overflow-style: none ; /* IE and Edge */
}

.hide-scrollbr::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}
   </style>
    
</body>
</html>