 <div>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <nav class="site-nav">
      <div class="container">
          <div class="menu-bg-wrap">
              <div class="site-navigation">
                  <a href="" class="logo m-0 float-start">LUXE Properties</a>

                  <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                      <li class="active"><a href="/">Home</a></li>
                      <li><a href="{{ route('properties') }}">Properties</a></li>
                      <li><a href="{{ route('services') }}">Advertise</a></li>
                      <li><a href="{{ route('about') }}">Insights</a></li>


                      @guest
                          <li><a href="{{ route('login') }}">Login</a></li>
                          <li><a href="{{ route('register') }}">Register</a></li>
                      @else
                          <li class="has-children">
                              <a href="#">
                                  {{ Auth::user()->name }}
                                  <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                  </svg>
                              </a>
                              <ul class="dropdown">
                                  <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                  @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                      <li><a href="{{ route('api-tokens.index') }}">API Tokens</a></li>
                                  @endif

                                   <!-- Add a link to the dashboard -->
{{--                    <x-dropdown-link href="{{ route('dashboard') }}">--}}
{{--                        {{ __('Dashboard') }}--}}
{{--                     </x-dropdown-link>--}}
{{--                     --}}
                                  <div class="border-t border-gray-200"></div>
                                  <form method="POST" action="{{ route('logout') }}" x-data>
                                      @csrf
                                      <li><a href="{{ route('logout') }}" @click.prevent="$root.submit();">Log Out</a></li>
                                  </form>
                              </ul>
                          </li>
                      @endguest



              <div class="ms-3 relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">

                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-200"></div>


                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

              <a
                href="#"
                class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                data-toggle="collapse"

                data-target="#main-navbar"
              >
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </nav>
</div>
