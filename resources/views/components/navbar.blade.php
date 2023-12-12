<header class="z-40 w-full border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a href="" class="flex items-center">
            <img src="{{ asset('img/logo.webp') }}" class="mr-3 h-8" alt="Flowbite Logo" />
            <span class="hidden self-center whitespace-nowrap text-2xl font-semibold dark:text-white lg:block">Erlangga
                Nusantara Ekspor</span>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <nav class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                <li>
                    <a href="#"
                        class="block rounded bg-blue-700 py-2 pl-3 pr-4 text-white dark:bg-blue-600 md:bg-transparent md:p-0 md:text-custom-color-primary md:dark:bg-transparent md:dark:text-blue-500"
                        aria-current="page">Home</a>
                </li>

                <li>
                    <a href="#"
                        class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">About
                        Us</a>
                </li>

                {{-- Dropdown --}}
                <li>
                    <div class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-50 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">
                            Our Products
                            <svg class="ml-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="absolute z-50 mt-2 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white font-normal shadow dark:divide-gray-600 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownNavbarLink">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#"
                        class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Pricing</a>
                </li>
                <li>
                    <a href="#"
                        class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
