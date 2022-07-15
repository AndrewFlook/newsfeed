<header class="pt-6 pb-16 sm:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
          <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="{{ route('index') }}" class="flex items-center space-x-4 font-medium text-2xl">
                <span class="sr-only">Thai Time North Park</span>
                <img class="h-11 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=emerald&shade=600" alt="Workflow">
                <span>Thai Time North Park</span>
              </a>
              <div class="-mr-2 flex items-center md:hidden">
                <button type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-emerald-500" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:flex md:space-x-4">
            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-gray-900">About</a>

            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-gray-900">Contact</a>

            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-gray-900">Menu</a>

            <a href="#" class="px-4 py-2 font-medium text-gray-500 hover:text-gray-900">News</a>
          </div>
          <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0 space-x-4">
            @Auth
              <span class="inline-flex rounded-md shadow">
                <a href="{{ route('account.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-emerald-600 bg-white hover:bg-emerald-50"> My Account </a>
              </span>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="inline-flex rounded-md shadow items-center px-4 py-2 border border-transparent text-base font-medium text-emerald-600 bg-white hover:bg-emerald-50">Logout</button>
              </form>
            @else
              <span class="inline-flex rounded-md shadow">
                <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-emerald-600 bg-white hover:bg-emerald-50"> Log in </a>
              </span>
              <span class="inline-flex rounded-md shadow">
                <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-emerald-600 bg-white hover:bg-emerald-50"> Register </a>
              </span>
            @endif
          </div>
        </nav>
      </div>
</header>