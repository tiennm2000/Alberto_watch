@vite('resources/css/app.css')
<nav class="bg-gray-800 antialiased">
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0 py-4">
        <div class="flex items-center justify-between">

            <div class="flex items-center space-x-8">
                <div class="shrink-0">
                    <a href="/" title="">
                        <img class="block w-12 h-12" src="{{asset('storage/svg/logo-no-background.svg')}}" alt="">
                    </a>
                </div>

                <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3 sm:justify-center">
                    <li>
                        <a href="/" title="" class="flex text-sm font-medium text-white hover:text-primary-500">
                            Home
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/product" title="" class="flex text-sm font-medium text-white hover:text-primary-500">
                            Product
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/technology" title="" class="flex text-sm font-medium text-white hover:text-primary-500">
                            Technology
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/store-location" title="" class="text-sm font-medium text-white hover:text-primary-500">
                            Store Location
                        </a>
                    </li>
                    <li class="shrink-0">
                        <a href="/about" title="" class="text-sm font-medium text-white hover:text-primary-500">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center lg:space-x-2">

                <button id="myCartDropdownButton1" data-dropdown-toggle="myCartDropdown1" type="button" class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-700 text-sm font-medium leading-none text-white">
                    <span class="sr-only">Cart</span>
                    <svg class="w-5 h-5 lg:me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                    </svg>
                    <span class="hidden sm:flex">My Cart</span>
                    <svg class="hidden sm:flex w-4 h-4 text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>

                <div id="myCartDropdown1" class="hidden z-10 mx-auto max-w-sm space-y-4 overflow-hidden rounded-lg bg-gray-800 p-4 antialiased shadow-lg">
                    <div class="grid grid-cols-2">
                        <div>
                            <a href="#" class="truncate text-sm font-semibold leading-none text-white hover:underline">Apple iPhone 15</a>
                            <p class="mt-0.5 truncate text-sm font-normal text-gray-400">$599</p>
                        </div>
                        <div class="flex items-center justify-end gap-6">
                            <p class="text-sm font-normal leading-none text-gray-400">Qty: 1</p>
                            <button data-tooltip-target="tooltipRemoveItem1a" type="button" class="text-red-600 hover:text-red-700">
                                <span class="sr-only"> Remove </span>
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div>
                            <a href="#" class="truncate text-sm font-semibold leading-none text-white hover:underline">Apple iPad Air</a>
                            <p class="mt-0.5 truncate text-sm font-normal text-gray-400">$499</p>
                        </div>
                        <div class="flex items-center justify-end gap-6">
                            <p class="text-sm font-normal leading-none text-gray-400">Qty: 1</p>
                            <button data-tooltip-target="tooltipRemoveItem2a" type="button" class="text-red-600 hover:text-red-700">
                                <span class="sr-only"> Remove </span>
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div>
                            <a href="#" class="truncate text-sm font-semibold leading-none text-white hover:underline">Apple Watch SE</a>
                            <p class="mt-0.5 truncate text-sm font-normal text-gray-400">$598</p>
                        </div>
                        <div class="flex items-center justify-end gap-6">
                            <p class="text-sm font-normal leading-none text-gray-400">Qty: 2</p>
                            <button data-tooltip-target="tooltipRemoveItem3b" type="button" class="text-red-600 hover:text-red-700">
                                <span class="sr-only"> Remove </span>
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div>
                            <a href="#" class="truncate text-sm font-semibold leading-none text-white hover:underline">Sony Playstation 5</a>
                            <p class="mt-0.5 truncate text-sm font-normal text-gray-400">$799</p>
                        </div>
                        <div class="flex items-center justify-end gap-6">
                            <p class="text-sm font-normal leading-none text-gray-400">Qty: 1</p>
                            <button data-tooltip-target="tooltipRemoveItem4b" type="button" class="text-red-600 hover:text-red-700">
                                <span class="sr-only"> Remove </span>
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <div>
                            <a href="#" class="truncate text-sm font-semibold leading-none text-white hover:underline">Apple iMac 20"</a>
                            <p class="mt-0.5 truncate text-sm font-normal text-gray-400">$8,997</p>
                        </div>
                        <div class="flex items-center justify-end gap-6">
                            <p class="text-sm font-normal leading-none text-gray-400">Qty: 3</p>
                            <button data-tooltip-target="tooltipRemoveItem5b" type="button" class="text-red-600 hover:text-red-700">
                                <span class="sr-only"> Remove </span>
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <a href="#" title="" class="mb-2 me-2 inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300" role="button"> Proceed to Checkout </a>
                </div>

                <button id="userDropdownButton1" data-dropdown-toggle="userDropdown1" type="button" class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-700 text-sm font-medium leading-none text-white">
                    <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    Account
                    <svg class="w-4 h-4 text-white ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>
                </button>

                <div id="userDropdown1" class="hidden z-10 w-56 divide-y divide-gray-100 overflow-hidden overflow-y-auto rounded-lg bg-gray-800 antialiased shadow">
                    <ul class="p-2 text-start text-sm font-medium text-white">
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> My Account </a></li>
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> My Orders </a></li>
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> Settings </a></li>
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> Favourites </a></li>
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> Delivery Addresses </a></li>
                        <li><a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> Billing Data </a></li>
                    </ul>

                    <div class="p-2 text-sm font-medium text-white">
                        <a href="#" title="" class="inline-flex w-full items-center gap-2 rounded-md px-3 py-2 text-sm hover:bg-gray-700"> Sign Out </a>
                    </div>
                </div>

                <button type="button" data-collapse-toggle="ecommerce-navbar-menu-1" aria-controls="ecommerce-navbar-menu-1" aria-expanded="false" class="inline-flex lg:hidden items-center justify-center hover:bg-gray-700 rounded-md p-2 text-white">
                    <span class="sr-only">Open Menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                    </svg>
                </button>
            </div>
        </div>

        <div id="ecommerce-navbar-menu-1" class="bg-gray-700 border border-gray-200 rounded-lg py-3 hidden px-4 mt-4">
            <ul class="text-white text-sm font-medium space-y-3">
                <li>
                    <a href="#" class="hover:text-primary-500">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-500">Product</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-500">Technology</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-500">Store Location</a>
                </li>
                <li>
                    <a href="#" class="hover:text-primary-500">About US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
