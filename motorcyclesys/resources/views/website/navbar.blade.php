<nav id="header" class="w-full z-30 top-0 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                    <li><a class="inline-block no-underline text-white hover:text-black hover:underline py-2 px-4"
                            href="/">
                            Motorcycles</a></li>
                    <li>
                    <li>
                        <a class="inline-block no-underline text-white hover:text-black hover:underline py-2 px-4"
                            href="/about-us">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a class="inline-block no-underline text-white hover:text-black hover:underline py-2 px-4"
                            href="/apply">
                            How to Apply ?
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="order-1 md:order-2">
            <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                href="#">
                <img src="./logo.png" style="height: 48px;">
            </a>
        </div>

        <div class="order-2 md:order-3 flex items-center" id="nav-content">

            <div class="relative max-w-lg mx-auto">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none" style="color: #16181D;">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </span>
                <input style="color: #16181D;"
                    class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-red-500 focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Quick Search..">
            </div>

            <a class="inline-flex items-center no-underline hover:text-black px-4" href="/login">
                <svg class="fill-current hover:text-black mr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <circle fill="none" cx="12" cy="7" r="3" />
                    <path
                        d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                </svg>
                <span>Apply Now!</span>
            </a>
            

        </div>
    </div>
</nav>