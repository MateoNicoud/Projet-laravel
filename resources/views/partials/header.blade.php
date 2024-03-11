<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="relative z-10 flex px-2 lg:px-0">
                <div class="flex flex-shrink-0 items-center">
                    <a href="/">
                        <img class="block h-8 w-auto" src="{{ asset('assets/icons/logo_desktop.svg') }}" alt="Your Company">
                    </a>
                </div>
            </div>
            <div class="relative z-0 flex flex-1 items-center justify-center px-2 sm:absolute sm:inset-0">
                <div class="w-full sm:max-w-xs">
                    <form method="get" action="search">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <input id="search"  name="search"
                                   class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="Search" type="text">
                        </div>
                    </form>
                </div>
            </div>
            <div class="relative z-10 flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg id="icon_burger" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <!-- Profile dropdown -->
                <div class="relative ml-4 flex-shrink-0">
                    <div>
                        <button type="button" class="relative flex bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Ouvre ton panier</span>
                            @if(isset($nbreProduct))
                                <span class="absolute text-xs text-white -top-2 -right-2 px-2 py-1 bg-red-600 rounded-full">{{$nbreProduct}}</span>
                            @endif
                            <img class="h-8 w-8 " src="{{asset('assets/icons/logo_cart.svg')}}" alt="">
                        </button>
                    </div>

                    <!--
                      Dropdown menu, show/hide based on menu state.

                      Entering: "transition ease-out duration-100"
                        From: "transform opacity-0 scale-95"
                        To: "transform opacity-100 scale-100"
                      Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->

                </div>
            </div>
        </div>
        <nav class="hidden lg:flex flex-wrap xl:flex-nowrap lg:space-x-8 lg:py-2" aria-label="Global">
            @foreach($categories as $category)
                <a href="/{{$category->slug}}" class="bg-gray-100 text-gray-900 inline-flex items-center rounded-md py-2 px-3 text-sm font-medium">{{$category->name}}</a>
            @endforeach
        </nav>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <nav class="lg:hidden hidden" aria-label="Global" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-900 hover:bg-gray-50 hover:text-gray-900" -->
            @foreach($categories as $category)
                <a href="/{{$category->slug}}" class="text-gray-900 hover:bg-gray-50 hover:text-gray-900 block rounded-md py-2 px-3 text-base font-medium">{{$category->name}}</a>
            @endforeach
        </div>
        <hr class="flex justify-center border-solid border-1 border-neutral-300 w-8/12 mx-auto rounded-full my-6">
        <div class="mt-3 space-y-1 px-2">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <hr class="flex justify-center border-solid border-1 border-neutral-300 w-8/12 mx-auto rounded-full my-6">
            <div class="mt-3 flex justify-center" >
                <a class="w-20 bg-sky-300 rounded-lg" >
                    <img class="p-3 mx-auto" src="{{asset('assets/icons/logo_cart.svg')}}">
                </a>
            </div>
        </div>
    </nav>
</header>
