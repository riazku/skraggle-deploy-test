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
                        'campaigns': {
                            parent: ['{{ route('campaigns.campaigns') }}', '{{ route('automation.automation') }}', '{{ route('newsletter.newsletter') }}', '{{ route('recurring.recurring') }}', '{{ route('interaction.interaction') }}', '{{ route('content.content') }}', '{{ route('micropoll.micropoll') }}', '{{ route('survey.survey') }}'],
                            children: {
                                '{{ route('campaigns.campaigns') }}': 'scenarios',
                                '{{ route('automation.automation') }}': 'automation',
                                '{{ route('newsletter.newsletter') }}': 'newsletter',
                                '{{ route('recurring.recurring') }}': 'recurring',
                                '{{ route('interaction.interaction') }}': 'interaction',
                                '{{ route('content.content') }}': 'content',
                                '{{ route('micropoll.micropoll') }}': 'micropoll',
                                '{{ route('survey.survey') }}': 'survey'
                            }
                        },
                        'reports': {
                            parent: ['{{ route('user.user') }}', '{{ route('revenue.revenue') }}', '{{ route('siteactivity.siteactivity') }}', '{{ route('emailactivity.emailactivity') }}', '{{ route('ecommerce.ecommerce') }}', '{{ route('catalog.catalog') }}', '{{ route('export.export') }}'],
                            children: {
                                '{{ route('user.user') }}': 'user-reports',
                                '{{ route('revenue.revenue') }}': 'revenue',
                                '{{ route('siteactivity.siteactivity') }}': 'siteactivity',
                                '{{ route('emailactivity.emailactivity') }}': 'emailactivity',
                                '{{ route('ecommerce.ecommerce') }}': 'ecommerce',
                                '{{ route('catalog.catalog') }}': 'catalog',
                                '{{ route('export.export') }}': 'export'
                            }
                        },
                        'users': {
                            parent: ['{{ route('segmentslists.segmentslists') }}', '{{ route('userprofile.userprofile') }}', '{{ route('analytics.analytics') }}', '{{ route('importuser.importuser') }}', '{{ route('setting.settings') }}'],
                            children: {
                                '{{ route('segmentslists.segmentslists') }}': 'segments',
                                '{{ route('userprofile.userprofile') }}': 'userprofile',
                                '{{ route('analytics.analytics') }}': 'analytics',
                                '{{ route('importuser.importuser') }}': 'importuser',
                                '{{ route('setting.settings') }}': 'settings'
                            }
                        },
                        'setup': {
                            parent: ['{{ route('setup_catalog.setup') }}', '{{ route('gallery.gallery') }}', '{{ route('couponcodes.couponcodes') }}', '{{ route('webpush.webpush') }}', '{{ route('activityfeed.activityfeed') }}', '{{ route('dataimport.dataimport') }}', '{{ route('pages.pages') }}', '{{ route('integration.integration') }}', '{{ route('algorithms.algorithms') }}'],
                            children: {
                                '{{ route('setup_catalog.setup') }}': 'catalog-setup',
                                '{{ route('gallery.gallery') }}': 'gallery',
                                '{{ route('couponcodes.couponcodes') }}': 'couponcodes',
                                '{{ route('webpush.webpush') }}': 'webpush',
                                '{{ route('activityfeed.activityfeed') }}': 'activityfeed',
                                '{{ route('dataimport.dataimport') }}': 'dataimport',
                                '{{ route('pages.pages') }}': 'pages',
                                '{{ route('integration.integration') }}': 'integration',
                                '{{ route('algorithms.algorithms') }}': 'algorithms'
                            }
                        },
                        'settings': {
                            parent: ['#'],
                            children: {
                                '{{ route('accountinfo.accountinfo') }}': 'accountinfo',
                                '{{ route('accountsetting.accountsetting') }}': 'accountsetting',
                                '{{ route('accounthistory.accounthistory') }}': 'accounthistory',
                                '{{ route('emailsetting.emailsetting') }}': 'emailsetting',
                                '{{ route('access.access') }}': 'access',
                                '{{ route('myprofile.myprofile') }}': 'myprofile',
                                '{{ route('biling.biling') }}': 'biling'
                            }
                        }
                    };
                    
                    // Check which menu should be active
                    for (const [menu, routes] of Object.entries(menuItems)) {
                        if (menu === 'dashboard') {
                            if (routes === currentPath) {
                                this.activeMenu = menu;
                                localStorage.setItem('activeMenu', menu);
                                break;
                            }
                        } else {
                            if (routes.parent.includes(currentPath)) {
                                this.activeMenu = menu;
                                this.openMenu = menu;
                                this.activeChild = routes.children[currentPath] || '';
                                localStorage.setItem('activeMenu', menu);
                                localStorage.setItem('openMenu', menu);
                                localStorage.setItem('activeChild', this.activeChild);
                                break;
                            }
                        }
                    }
                },
                setOpenMenu(menu) {
                    this.openMenu = this.openMenu === menu ? '' : menu;
                    this.activeMenu = menu;
                    localStorage.setItem('openMenu', this.openMenu);
                    localStorage.setItem('activeMenu', this.activeMenu);
                },
                setActiveChild(child) {
                    this.activeChild = child;
                    localStorage.setItem('activeChild', child);
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
                       @click="activeMenu = 'dashboard'; activeChild = ''; localStorage.setItem('activeMenu', 'dashboard'); localStorage.setItem('activeChild', '');"
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
                        <li><a href="{{ route('campaigns.campaigns') }}" @click="setActiveChild('scenarios')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'scenarios', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'scenarios'}">Scenarios</a></li>
                        <li><a href="{{ route('automation.automation') }}" @click="setActiveChild('automation')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'automation', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'automation'}">Automation</a></li>
                        <li><a href="{{ route('newsletter.newsletter') }}" @click="setActiveChild('newsletter')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'newsletter', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'newsletter'}">Newsletter</a></li>
                        <li><a href="{{ route('recurring.recurring') }}" @click="setActiveChild('recurring')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'recurring', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'recurring'}">Recurring</a></li>
                        <li><a href="{{ route('interaction.interaction') }}" @click="setActiveChild('interaction')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'interaction', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'interaction'}">Interaction</a></li>
                        <li><a href="{{ route('content.content') }}" @click="setActiveChild('content')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'content', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'content'}">Content</a></li>
                        <li><a href="{{ route('micropoll.micropoll') }}" @click="setActiveChild('micropoll')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'micropoll', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'micropoll'}">Micro Poll</a></li>
                        <li><a href="{{ route('survey.survey') }}" @click="setActiveChild('survey')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'survey', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'survey'}">Survey</a></li>
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
                        <li><a href="{{ route('user.user') }}" @click="setActiveChild('user-reports')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'user-reports', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'user-reports'}">Users</a></li>
                        <li><a href="{{ route('revenue.revenue') }}" @click="setActiveChild('revenue')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'revenue', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'revenue'}">Revenue</a></li>
                        <li><a href="{{ route ('siteactivity.siteactivity')}}" @click="setActiveChild('siteactivity')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'siteactivity', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'siteactivity'}">Site Activity</a></li>
                        <li><a href=" {{ route('emailactivity.emailactivity') }}" @click="setActiveChild('emailactivity')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'emailactivity', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'emailactivity'}">Email Activity</a></li>
                        <li><a href="{{ route('ecommerce.ecommerce') }}" @click="setActiveChild('ecommerce')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'ecommerce', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'ecommerce'}">Ecommerce</a></li>
                        <li><a href="{{ route('catalog.catalog') }}" @click="setActiveChild('catalog')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'catalog', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'catalog'}">Catalog</a></li>
                        <li><a href="{{ route('export.export') }}" @click="setActiveChild('export')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'export', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'export'}">Exports</a></li>
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
                        <li><a href="{{ route('segmentslists.segmentslists')}}" @click="setActiveChild('segments')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'segments', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'segments'}">Segments & Lists</a></li>
                        <li><a href="{{ route ('userprofile.userprofile')}}" @click="setActiveChild('userprofile')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'userprofile', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'userprofile'}">User Profile CRM</a></li>
                        <li><a href="{{ route ('analytics.analytics')}}" @click="setActiveChild('analytics')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'analytics', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'analytics'}">Analytics</a></li>
                        <li><a href="{{route('importuser.importuser')}}" @click="setActiveChild('importuser')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'importuser', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'importuser'}">Import Users</a></li>
                        <li><a href="{{route ('setting.settings')}}" @click="setActiveChild('settings')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'settings', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'settings'}">Settings</a></li>
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
                        <li><a href="{{route ('setup_catalog.setup')}}" @click="setActiveChild('catalog-setup')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'catalog-setup', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'catalog-setup'}">Catalog</a></li>
                        <li><a href="{{route ('gallery.gallery')}}" @click="setActiveChild('gallery')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'gallery', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'gallery'}">Gallery</a></li>
                        <li><a href="{{route ('couponcodes.couponcodes')}}" @click="setActiveChild('couponcodes')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'couponcodes', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'couponcodes'}">Cuppon Codes</a></li>
                        <li><a href="{{ route('webpush.webpush')}}" @click="setActiveChild('webpush')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'webpush', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'webpush'}">WebPush</a></li>
                        <li><a href="{{ route('activityfeed.activityfeed')}}" @click="setActiveChild('activityfeed')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'activityfeed', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'activityfeed'}">Activity Feed</a></li>
                        <li><a href="{{ route('dataimport.dataimport')}}" @click="setActiveChild('dataimport')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'dataimport', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'dataimport'}">Data Import</a></li>
                        <li><a href="{{ route('pages.pages')}}" @click="setActiveChild('pages')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'pages', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'pages'}">Pages</a></li>
                        <li><a href="{{ route('integration.integration')}}" @click="setActiveChild('integration')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'integration', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'integration'}">Integrations</a></li>
                        <li><a href="{{ route('algorithms.algorithms')}}" @click="setActiveChild('algorithms')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'algorithms', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'algorithms'}">Algorithms</a></li>
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
                          
                        <li><a href="{{ route('accountinfo.accountinfo')}}" @click="setActiveChild('accountinfo')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'accountinfo', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'accountinfo'}">Account Info</a></li>
                        <li><a href="{{ route('accountsetting.accountsetting')}}" @click="setActiveChild('accountsetting')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'accountsetting', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'accountsetting'}">Account Settings</a></li>
                        <li><a href="{{ route('accounthistory.accounthistory')}}" @click="setActiveChild('accounthistory')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'accounthistory', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'accounthistory'}">Account History</a></li>
                        
                        <li><a href="{{ route('emailsetting.emailsetting')}}" @click="setActiveChild('emailsetting')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'emailsetting', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'emailsetting'}">Email Settings</a></li>
                        <li><a href="{{ route('access.access')}}" @click="setActiveChild('access')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'access', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'access'}">Access</a></li>
                        <li><a href="{{ route('myprofile.myprofile')}}" @click="setActiveChild('myprofile')" class="block text-sm p-2.5 rounded-lg" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'myprofile', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'myprofile'}">My Profile</a></li>
                        <li><a href="{{ route('biling.biling')}}" @click="setActiveChild('biling')" class="block text-sm p-2.5 rounded-lg mb-6" :class="{'bg-[#EEEAFF] text-[#551895] font-medium': activeChild === 'biling', 'text-[#551895] hover:bg-[#EEEAFF]': activeChild !== 'biling'}">Bilings</a></li>
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