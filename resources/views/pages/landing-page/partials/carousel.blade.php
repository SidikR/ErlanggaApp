<section id="carousel">
    <div id="default-carousel" class="relative w-full overflow-visible sm:mb-28" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-48 overflow-hidden md:h-96 lg:h-[700px]">

            @foreach ($data['carousel'] as $carousel)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset($carousel['image']) }}"
                        class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2"
                        alt="{{ $carousel['alt'] }}">
                </div>
            @endforeach
        </div>
        {{-- Background Black --}}
        <div class="absolute top-0 z-30 h-full w-full bg-black opacity-70"></div>
        <!-- Slider controls -->
        <button type="button"
            class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>

        {{-- Hero Carousel --}}
        <div class="absolute left-1/2 top-1/2 z-30 -translate-x-1/2 -translate-y-1/2 transform text-center text-white">
            <h1
                class="animate__animated animate__zoomInDown mb-4 text-[12px] font-extrabold sm:text-2xl md:text-3xl lg:text-6xl">
                Erlangga Nusantara Ekspor
            </h1>
            <p
                class="animate__animated animate__zoomInRight mb-8 text-[10px] font-normal text-gray-300 sm:text-lg md:text-xl">
                Indonesia’s leading global suppliers and exporters of agricultural & coconut derivatives</p>
            <div class="animate__animated animate__zoomInUp flex flex-col sm:flex-row sm:justify-center sm:space-x-4">
                <a href="#our-products"
                    class="hidden items-center justify-center rounded-lg bg-[#ad3235] px-5 py-3 text-center text-base font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 sm:inline-flex">
                    Get started
                    <svg class="ml-2 h-3.5 w-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        {{-- Badge Process --}}
        <div
            class="z-40 mb-10 hidden h-auto w-[90%] rounded-3xl bg-white shadow-2xl sm:-bottom-10 sm:left-1/2 sm:-translate-x-1/2 sm:translate-y-1/2 lg:absolute lg:-bottom-2 lg:block">
            <div class="flex h-full w-full items-start justify-center gap-10 p-6 text-center">
                <div class="flex w-1/4 flex-col items-center justify-center text-center">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-r-square-fill transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                            viewBox="0 0 16 16">
                            <path
                                d="M6.835 5.092v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417H6.835Z" />
                            <path
                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm3.5 4.002h3.11c1.71 0 2.741.973 2.741 2.46 0 1.138-.667 1.94-1.495 2.24L11.5 12H9.98L8.52 8.924H6.836V12H5.5V4.002Z" />
                        </svg>
                    </span>

                    <h1 class="mt-2 text-xl font-bold">Research</h1>
                    <p class="opacity-70">We always research every commodity that we are going to sell or supply. We
                        believe that every commodity have their own potential and we are here to help our buyer to get
                        the
                        best products from the Indonesia archipelago.</p>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center text-center">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-rocket-takeoff transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                            viewBox="0 0 16 16">
                            <path
                                d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z" />
                            <path
                                d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z" />
                            <path
                                d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
                        </svg>
                    </span>

                    <h1 class="mt-2 text-xl font-bold">Development</h1>
                    <p class="opacity-70">We are committed to giving the best for our customers. Therefore, All of the
                        products that are available already pass our development test, trial, and 3 times of quality
                        control.</p>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center text-center">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-star-fill transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                            viewBox="0 0 16 16">
                            <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                    </span>

                    <h1 class="mt-2 text-xl font-bold">Integrity</h1>
                    <p class="opacity-70">We always do our businesses with integrity and professionalism. We put it in
                        every aspect of our businesses</p>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center text-center">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                            class="bi bi-recycle transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                            viewBox="0 0 16 16">
                            <path
                                d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                        </svg>
                    </span>

                    <h1 class="mt-2 text-xl font-bold">Sustainability</h1>
                    <p class="opacity-70">We believe that doing our businesses and caring about sustainability will give
                        a great impact on our company, customers, and society</p>
                </div>
            </div>
        </div>

    </div>
    <div class="z-40 mx-auto mb-10 mt-6 h-auto w-[90%] rounded-3xl bg-white shadow-2xl lg:-bottom-2 lg:hidden">
        <div class="m-auto flex h-full w-full flex-col items-center justify-center gap-10 p-6 text-center">
            <div class="flex h-full w-full flex-col items-center justify-center text-center">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-r-square-fill transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M6.835 5.092v2.777h1.549c.995 0 1.573-.463 1.573-1.36 0-.913-.596-1.417-1.537-1.417H6.835Z" />
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm3.5 4.002h3.11c1.71 0 2.741.973 2.741 2.46 0 1.138-.667 1.94-1.495 2.24L11.5 12H9.98L8.52 8.924H6.836V12H5.5V4.002Z" />
                    </svg>
                </span>

                <h1 class="mt-2 text-xl font-bold">Research</h1>
                <p class="opacity-70">We always research every commodity that we are going to sell or supply. We
                    believe that every commodity have their own potential and we are here to help our buyer to get
                    the
                    best products from the Indonesia archipelago.</p>
            </div>
            <div class="flex h-full w-full flex-col items-center justify-center text-center">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-rocket-takeoff transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z" />
                        <path
                            d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z" />
                        <path
                            d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
                    </svg>
                </span>

                <h1 class="mt-2 text-xl font-bold">Development</h1>
                <p class="opacity-70">We are committed to giving the best for our customers. Therefore, All of the
                    products that are available already pass our development test, trial, and 3 times of quality
                    control.</p>
            </div>
            <div class="flex h-full w-full flex-col items-center justify-center text-center">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-star-fill transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                </span>

                <h1 class="mt-2 text-xl font-bold">Integrity</h1>
                <p class="opacity-70">We always do our businesses with integrity and professionalism. We put it in
                    every aspect of our businesses</p>
            </div>
            <div class="flex h-full w-full flex-col items-center justify-center text-center">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-recycle transform text-custom-color-secondary transition duration-300 hover:scale-110 hover:text-custom-color-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z" />
                    </svg>
                </span>

                <h1 class="mt-2 text-xl font-bold">Sustainability</h1>
                <p class="opacity-70">We believe that doing our businesses and caring about sustainability will give
                    a great impact on our company, customers, and society</p>
            </div>
        </div>
    </div>
</section>
