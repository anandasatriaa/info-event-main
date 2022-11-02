<!-- Navbar -->
<nav class="space-x-4 ">
    <div class="navkiri ml-11 mt-5 mb-5 pr-8">
      <div class="flex justify-between h-16">
        <div class="flex flex-auto justify-between mr-64">
          <a href="" class="flex-shrink-0 flex"><img class="h-10 lg:h-14 w-auto" src="{{ asset('assets/frontsite/images/logo_infoevent.png') }}" width="50" /></a>
        </div>
        <div class="navkanan ml-80 mb-5 navbar">
          <a href="{{ route('index') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">Home</a>
          <a href="{{ ('Event') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">Event</a>
          <a href="{{ ('Add-Event') }}" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base"
            >Add Event</a
          >
          <a href="#about" class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base">About</a>
          
          @guest
          <button
            type="button"
            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 mr-5"
          >
            <a
              href="{{ route('login') }}"
              class="px-3 py-2 text-white rounded-lg hover:bg-transparent hover:text-slate-900 font-family:'Poppins' mx-1 text-base"
              >Login/Register</a
            >
          </button>
          
        </div>
        @endguest
      
    

          
    @auth

    {{-- button authenticated --}}

        <div class="navkanan hidden  lg:flex lg:items-center border-l ">
            <div x-data="{ profileDekstopOpen: false }" class="ml-3 relative">
                <div>
                    <button type="button"
                        class="text-white bg-purple-700 hover:bg-purple-800 mt-2 rounded-full flex text-sm focus:outline-none "
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                        @click="profileDekstopOpen = ! profileDekstopOpen">
                        <!-- focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 -->
                        <span class="sr-only">Open user menu</span>
                        <div class="text-right mr-5">
                            <div class="text-base font-medium ml-3 text-white">
                                Hi, {{ Auth::user()->name }}
                            </div>
                            {{-- this section must read from type user --}}
                            <div class="text-sm ml-5 text-[#AFAEC3]">{{ Auth::user()->detail_user->type_user->name }}</div>
                        </div>
                        <img class="h-12 w-12 rounded-full ring-1 ring-offset-4 ring-[#0D63F3]"
                            src="{{ asset('/assets/frontsite/images/profile3.jpg') }}" alt="User Profile" />
                    </button>
                </div>
                <div 
                
                    x-show="profileDekstopOpen" @click.outside="profileDekstopOpen = false"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="origin-top-right absolute z-30 right-0 mt-2 w-48 rounded-md shadow-lg py-1backdrop-blur-sm bg-white/20 ring-1 ring-black ring-opacity-5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    
                    
                    @can('dashboard_access')
                    <a  href="{{ route('backsite.dashboard.index') }}"
                    class="block px-4 py-2 text-sm text-white
                     hover:bg-white/20" role="menuitem"
                    tabindex="-1" id="user-menu-item-0">
                    Admin </a>
                    @endcan

                    <a  href="{{ route('index') }}"
                        class="block px-4 py-2 text-sm text-white
                         hover:bg-white/20" role="menuitem"
                        tabindex="-1" id="user-menu-item-0">
                        Dashboard </a>

                    <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').
                    submit();"
                        class="block px-4 py-2 text-white rounded-lg hover:bg-white/20  font-family:'Poppins' mx-1 text-sm"
                        role="menuitem" tabindex="-1" id="user-menu-item-2">Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
        </div>

    @endauth
  </div>
</div>
  </nav>
  <!-- End Navbar -->