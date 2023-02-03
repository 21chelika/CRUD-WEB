<header class="bg-[#F5FBFC;]">
    <nav class="container relative flex py-5 items-center justify-between">
      <a href="">
        <img src="/img/Group 143.svg" alt="">
      </a>
      <div class="space-x-4 flex-1 ml-12 hidden md:block">
        <a href="/dashboard" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Home</a>
        <a href="/about" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">About</a>
        <a href="/services" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Services</a>
        <a href="/download" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Download</a>
      </div>
      <div class="flex flex-row mr-5 items-center">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-lg text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-lg dark:text-gray-500 underline">Log in</a>
            <a href="{{ route('register') }}" class="ml-4 text-lg bg-teal-300 text-white py-2 px-4 rounded-full">Register</a>
        @endauth
      </div>  
      <div  
        class="popup absolute inset-x-0 top-10 border border-gray-300 bg-white shadow-lg right-12 rounded-lg p-4 hidden md:hidden z-40">
        <div class="flex space-x-5">
          <div class="flex h-full items-center space-x-1 w-full mb-4 border border-gray-400 px-3 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
          <a href="">
            <img src="./assets/cart.svg" alt="">
          </a>
        </div>
      </div>
    </nav>
</header>