<!DOCTYPE html>
<html lang="en">

    <head>
        {{-- Meta --}}
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta name="author" content="{{ $meta['author'] ?? 'PT Erlangga Nusantara Ekspor' }}">
        <meta name="description" content="{{ $meta['description'] ?? 'default description' }}">
        <meta name="keywords" content="{{ $meta['keywords'] ?? 'default keyword' }}">
        <meta name="revisit-after" content="3 days">
        <meta name="language" content="en">
        <meta name="generator" content="Laravel">
        <meta name="copyright" content="Hak Cipta © 2023 PT. Erlangga Nusantara Ekspor">

        {{-- Title --}}
        <title>{{ $meta['title'] ?? 'PT Erlangga Nusantara Ekspor' }}</title>

        {{-- Import Tailwind --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Import Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
            rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/logo.webp') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    </head>

    <body>
        <header id="navbar"
            class="fixed top-0 z-50 w-full overflow-hidden px-4 py-4 text-white transition-all duration-300 ease-in-out xl:py-9">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
                <a href="" class="flex items-center">
                    <img src="{{ asset('img/logo.webp') }}" class="mr-3 h-8" alt="Flowbite Logo" />
                    <span
                        class="hidden self-center whitespace-nowrap text-2xl font-semibold dark:text-white lg:block">Erlangga
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

                <nav class="z-50 hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="mt-4 flex flex-col rounded-lg border border-gray-100 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:p-0 md:dark:bg-gray-900">
                        <li>
                            <a href="#cta"
                                class="block rounded bg-blue-700 py-2 pl-3 pr-4 dark:bg-blue-600 md:bg-transparent md:p-0 md:text-custom-color-primary md:dark:bg-transparent md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>

                        <li>
                            <a href="#about-our"
                                class="block rounded py-2 pl-3 pr-4 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">About
                                Us</a>
                        </li>

                        <li>
                            <a href="#our-products"
                                class="block rounded py-2 pl-3 pr-4 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Our
                                Products</a>
                        </li>

                        {{-- Dropdown --}}
                        {{-- <li class="relative">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex w-full items-center justify-between border-b border-gray-100 py-2 pl-3 pr-4 hover:bg-gray-50 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 dark:focus:text-white md:w-auto md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">
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
                                        <a href="#cta"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}

                        <li>
                            <a href="#gallery"
                                class="block rounded py-2 pl-3 pr-4 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Gallery</a>
                        </li>
                        <li>
                            <a href="#footer"
                                class="block rounded py-2 pl-3 pr-4 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-custom-color-primary md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        {{-- Carousel Section --}}
        @include('pages/landing-page/partials/carousel')

        {{-- About Our Section --}}
        @include('pages/landing-page/partials/about-us')


        <section id="our-products">
            <div class="m-auto mt-6 w-[90%] bg-white p-4 text-center dark:border-gray-700 dark:bg-gray-800 sm:p-8">
                <h5 class="mb-3 text-3xl font-bold text-gray-900 dark:text-white">Our Products</h5>
                <p class="text-center">Available in more than 10 coconut derivative products</p>
                <div class="flex flex-col justify-center px-3">
                    <div class="row grid h-full w-full items-start justify-center gap-8 rounded-2xl p-2 xl:grid-cols-4">
                        @php
                            $index = 0;
                            $pages = ceil($totalData / $itemsPerPage);
                        @endphp
                        @for ($page = 1; $page <= $pages; $page++)
                            @for ($i = 0; $i < $itemsPerPage && $index < $totalData; $i++)
                                @php
                                    $product = $products[$index];
                                    $index++;
                                @endphp
                                <div class="filterDiv page{{ $page }} hidden transition-all duration-300">
                                    <div
                                        class="flex h-[490px] w-full max-w-sm transform flex-col rounded-lg border border-gray-200 bg-white shadow transition duration-300 hover:-translate-y-6 hover:scale-105 hover:shadow-2xl dark:border-gray-700 dark:bg-gray-800">
                                        <a href="{{ asset('img/products/' . $product->image) }}" target="_blank"
                                            class="rounded-3xl">
                                            <img class="transform rounded-3xl p-3 transition duration-300 hover:scale-105"
                                                src="{{ asset('img/products/' . $product->image) }}"
                                                alt="{{ 'Foto dari produk ' . $product->name }}" />
                                        </a>
                                        <div class="flex h-[70%] max-h-full flex-col justify-between px-5 pb-9">
                                            <a href="#">
                                                <h5
                                                    class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                                    {{ $product->name }}
                                                </h5>
                                            </a>
                                            <div class="mt-3">
                                                <button data-modal-target="popup-modal{{ $product->name }}"
                                                    data-modal-toggle="popup-modal{{ $product->name }}"
                                                    class="rounded-lg bg-custom-color-primary px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-500 dark:bg-red-500 dark:hover:bg-custom-color-primary dark:focus:ring-red-500">
                                                    Price!
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="popup-modal{{ $product->name }}" data-modal-backdrop="static"
                                    class="animate__animated animate__bounceIn fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                    <div class="relative max-h-full w-full max-w-md p-4">
                                        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal{{ $product->name }}">
                                                <svg class="h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 text-center md:p-5">
                                                <i class="bi bi-info-circle-fill text-4xl text-gray-500"></i>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    You want to learn more about the product
                                                    <strong>{{ $product->name }}</strong> Do you prefer to use?
                                                </h3>

                                                <button data-modal-hide="popup-modal{{ $product->name }}"
                                                    onclick="sendMessage('{{ $product->name }}')" type="button"
                                                    class="me-2 inline-flex items-center rounded-lg bg-green-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-800"><i
                                                        class="bi bi-whatsapp me-2"></i>Whatssapp
                                                </button>
                                                <button data-modal-hide="popup-modal{{ $product->name }}"
                                                    type="button" onclick="sendEmail('{{ $product->name }}')"
                                                    class="rounded-lg border border-gray-200 bg-green-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-400 hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600"><i
                                                        class="bi bi-envelope me-2"></i>Email</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endfor

                    </div>
                    <div class="p-3" id="myBtnContainer">
                        <div class="flex flex-col items-center">
                            <!-- Help text -->
                            <span class="mb-2 text-sm text-gray-700 dark:text-gray-400">
                                Showing <span id="startData"
                                    class="font-semibold text-gray-900 dark:text-white"></span>
                                to
                                <span id="endData" class="font-semibold text-gray-900 dark:text-white"></span> of
                                <span class="font-semibold text-gray-900 dark:text-white">{{ $totalData }}</span>
                                Entries
                            </span>
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-sm">
                                    <li>
                                        <a href="#our-products">
                                            <button
                                                class="btn ms-0 flex h-8 items-center justify-center rounded-s-lg border border-e-0 border-gray-300 bg-gray-800 px-3 leading-tight text-white hover:bg-gray-700 hover:text-white dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                                id="prevButton">Previous</button>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#our-products">
                                            <button id='allButton'
                                                class="btn flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                All
                                            </button></a>
                                    </li>
                                    @for ($i = 1; $i <= $pages; $i++)
                                        <li>
                                            <a href="#our-products">
                                                <button id='btnPage{{ $i }}'
                                                    class="btn flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                    {{ $i }}
                                                </button></a>
                                        </li>
                                    @endfor
                                    <li>
                                        <a href="#our-products">
                                            <button
                                                class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-gray-800 px-3 leading-tight text-white hover:bg-gray-700 hover:text-white dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                                id="nextButton">Next</button>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            let pages = {{ $pages }};
            let totalData = {{ $totalData }};
            let itemsPerPage = {{ $itemsPerPage }};
            let elements = {};
            let pageNow = 0;

            for (let i = 1; i <= pages; i++) {
                let className = `page${i}`;
                let idBtn = `btnPage${i}`;
                elements[className] = document.getElementsByClassName(className);
                elements[idBtn] = document.getElementById(idBtn);

                elements[idBtn].addEventListener('click', function() {
                    // Menangani klik pada tombol
                    handleButtonClick(i);
                });
            }

            let buttonPrev = document.getElementById('prevButton');
            let buttonNext = document.getElementById('nextButton');
            let buttonAll = document.getElementById('allButton');

            buttonNext.addEventListener('click', function() {
                if (pageNow === 0) {
                    handleButtonClick(1);
                } else if (pageNow >= 1 && pageNow < pages) {
                    handleButtonClick(pageNow + 1);
                }
                calculateRange(pageNow, itemsPerPage);

                // Disable buttonNext when pageNow reaches the last page
                if (pageNow === pages) {
                    buttonNext.disabled = true;
                } else {
                    buttonNext.disabled = false;
                }
            });

            function allData() {
                for (let j = 1; j <= pages; j++) {
                    let pageClassName = `page${j}`;
                    let pageElements = elements[pageClassName];
                    for (let k = 0; k < pageElements.length; k++) {
                        pageElements[k].classList.add('block');
                        pageElements[k].classList.remove('hidden');
                    }
                }
                calculateRange(pageNow, itemsPerPage);
                pageNow = 0;
            }

            buttonAll.addEventListener('click', function() {
                allData();
                calculateRange(pageNow, itemsPerPage);
            });

            buttonPrev.addEventListener('click', function() {
                if (pageNow <= 1) {
                    buttonPrev.disabled = true;
                } else if (pageNow > 1 && pageNow <= pages) {
                    handleButtonClick(pageNow - 1);
                    buttonPrev.disabled = false;
                }
                calculateRange(pageNow, itemsPerPage);
            });

            function handleButtonClick(pageNumber) {
                // Lakukan sesuatu dengan nomor halaman yang diklik
                pageNow = pageNumber;

                // Contoh: Menyembunyikan/menampilkan elemen-elemen halaman
                for (let j = 1; j <= pages; j++) {
                    let pageClassName = `page${j}`;
                    let pageElements = elements[pageClassName];
                    for (let k = 0; k < pageElements.length; k++) {
                        if (j === pageNow) {
                            pageElements[k].classList.add('block');
                            pageElements[k].classList.remove('hidden');
                        } else {
                            pageElements[k].classList.add('hidden');
                            pageElements[k].classList.remove('block');
                        }
                    }
                }
                calculateRange(pageNow, itemsPerPage);

                // Disable buttonNext when pageNow reaches the last page
                if (pageNow === pages) {
                    buttonNext.disabled = true;
                } else {
                    buttonNext.disabled = false;
                }

                if (pageNow > 1 && pageNow <= pages) {
                    buttonPrev.disabled = false;
                }
            }

            let startData = document.getElementById('startData');
            let endData = document.getElementById('endData');

            function calculateRange(pageNumber, dataPerPage) {
                const startId = (pageNumber - 1) * dataPerPage + 1;
                const endId = pageNumber * dataPerPage;
                if (pageNow === 0) {
                    startData.innerHTML = 1;
                    endData.innerHTML = totalData;
                } else {
                    startData.innerHTML = startId;
                    endData.innerHTML = endId;
                }

            }
        </script>

        <section id="gallery" class="bg-slate-100 py-5">
            <h5 class="mb-1 mt-10 text-center text-3xl font-bold text-gray-900 dark:text-white">Our Gallery</h5>

            <div class="flex flex-wrap items-center justify-center py-4 md:py-8">
                <button type="button" id="buttonAllGallery"
                    class="mb-3 me-3 rounded-full border border-blue-600 bg-white px-5 py-2.5 text-center text-base font-medium capitalize text-blue-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-blue-500 dark:bg-gray-900 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800">All
                    categories</button>

                @foreach ($existingCategories as $category)
                    <button type="button" id="{{ 'button' . $category }}"
                        class="mb-3 me-3 rounded-full border border-white bg-white px-5 py-2.5 text-center text-base font-medium capitalize text-gray-900 hover:border-gray-200 focus:bg-blue-700 focus:text-white focus:outline-none focus:ring-2 focus:ring-blue-800 dark:border-gray-900 dark:bg-gray-900 dark:text-white dark:hover:border-gray-700 dark:focus:ring-gray-800">{{ str_replace('_', ' ', $category) }}</button>
                @endforeach
            </div>

            <div class="mx-0 grid grid-cols-1 justify-items-center gap-y-10 px-10 sm:grid-cols-2 md:grid-cols-6">
                @foreach ($gallery as $item)
                    <div
                        class="{{ $item->kategory }} aspect-w-2 aspect-h-1 relative h-[250px] w-full overflow-hidden rounded-lg shadow-lg xl:h-[250px] xl:w-[250px]">
                        <div class="absolute inset-0 overflow-hidden">
                            <img class="h-full w-full object-cover transition-transform hover:scale-110"
                                src="{{ asset('img/galery/' . $item->image) }}" alt="Foto untuk {{ $item->name }}"
                                id="croppedImageForm">
                        </div>
                    </div>
                @endforeach
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const gallery = {};
                    const categoryGallery = @json($existingCategories);

                    for (let i = 0; i < categoryGallery.length; i++) {
                        const idBtnGallery = `button${categoryGallery[i]}`;
                        const classNameGallery = categoryGallery[i];

                        gallery[idBtnGallery] = document.getElementById(idBtnGallery);

                        gallery[idBtnGallery].addEventListener('click', function() {
                            // Hide all galleries
                            for (let j = 0; j < categoryGallery.length; j++) {
                                hideGallery(categoryGallery[j]);
                            }

                            // Show the clicked gallery
                            showGallery(classNameGallery);
                        });
                    }

                    // Function to hide a gallery
                    function hideGallery(className) {
                        const galleries = document.getElementsByClassName(className);
                        for (let k = 0; k < galleries.length; k++) {
                            galleries[k].style.display = 'none';
                        }
                    }

                    // Function to show a gallery
                    function showGallery(className) {
                        const galleries = document.getElementsByClassName(className);
                        for (let k = 0; k < galleries.length; k++) {
                            galleries[k].style.display = 'grid';
                        }
                    }

                    const buttonAllGallery = document.getElementById('buttonAllGallery');
                    buttonAllGallery.addEventListener('click', function() {
                        for (let i = 0; i < categoryGallery.length; i++) {
                            const classNameGallery = categoryGallery[i];
                            showGallery(classNameGallery);
                        }
                    });
                });
            </script>
        </section>

        <section id="our-teams">
            <div class="m-auto mt-6 w-[90%] p-4 text-center dark:border-gray-700 dark:bg-gray-800 sm:p-8">
                <h5 class="mb-7 text-3xl font-bold text-gray-900 dark:text-white">Our Teams</h5>
                <div class="flex h-[500px] flex-col items-center justify-between gap-4 px-3 lg:flex-row">
                    <div class="aspect-w-2 aspect-h-1 relative h-full w-full overflow-hidden">
                        <img class="h-full w-full object-contain transition-transform hover:scale-95"
                            src="{{ asset('img/teams/ceo.jpeg') }}" alt="Foto untuk {{ $item->name }}">
                    </div>
                    <div class="aspect-w-2 aspect-h-1 relative h-full w-full overflow-hidden">
                        <img class="h-full w-full object-contain transition-transform hover:scale-95"
                            src="{{ asset('img/teams/coo.jpeg') }}" alt="Foto untuk {{ $item->name }}">
                    </div>
                </div>
            </div>
        </section>

        <section id="legaly-document">
            <div class="m-auto mt-6 w-[90%] p-4 text-center dark:border-gray-700 dark:bg-gray-800 sm:p-8">
                <h5 class="mb-5 text-3xl font-bold text-gray-900 dark:text-white">Documents of Legalty</h5>
                <div class="grid h-full w-full grid-cols-1 items-center justify-between gap-4 px-3 lg:grid-cols-3">
                    <div class="relative h-full w-full overflow-hidden">
                        <img class="h-full w-full object-contain transition-transform hover:scale-95"
                            src="{{ asset('img/documentLegaly/01.jpeg') }}" alt="Foto dokumen keabsahan Ferusahaan}">
                    </div>
                    <div class="relative h-full w-full overflow-hidden">
                        <img class="h-full w-full object-contain transition-transform hover:scale-95"
                            src="{{ asset('img/documentLegaly/02.jpeg') }}" alt="Foto dokumen keabsahan Ferusahaan}">
                    </div>
                    <div class="relative h-full w-full overflow-hidden">
                        <img class="h-full w-full object-contain transition-transform hover:scale-95"
                            src="{{ asset('img/documentLegaly/03.jpeg') }}" alt="Foto dokumen keabsahan Ferusahaan}">
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="flex w-full flex-row bg-slate-200 py-3">
            <div class="mx-auto flex h-auto w-[90%] flex-col items-start justify-center gap-3 p-3 lg:flex-row">

                <div class="maps-frame h-full w-full xl:w-[30%]">
                    <iframe class="h-full w-full rounded-md"
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d247.80952561628706!2d106.72681187280736!3d-6.400134004019068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjQnMDAuNCJTIDEwNsKwNDMnMzYuOCJF!5e0!3m2!1sid!2sid!4v1700446679416!5m2!1sid!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="address m-2 py-6">
                    <h2 class="text-lg font-bold">PT Erlangga Nusantara Ekspor</h2>
                    <address class="text-gray-500">
                        Jl. KP Curug RT 004 RW.003
                        Kelurahan Curug, Kec. Gunung
                        Sindur, Kab.Bogor Provinsi
                        Jawa Barat
                    </address>

                    <div class="contact mt-2 flex flex-col gap-2 text-gray-500">
                        <span><i class="bi bi-telephone-fill pe-2"></i>+62-8956-0529-4983</span>
                        <a href="mailto:order@pterlangganusantaraekspor.com">
                            <span><i class="bi bi-envelope-at-fill pe-2"></i>order@pterlangganusantaraekspor.com</span>
                        </a>
                        <a href="http://pterlangganusantaraekspor.com">
                            <span><i class="bi bi-globe2 pe-2"></i>pterlangganusantaraekspor.com</span>
                        </a>
                    </div>

                </div>

                <div class="calltoAction w-auto">
                    <div class="mx-auto w-full max-w-screen-xl">
                        <div class="grid grid-cols-1 gap-8 px-4 py-6 md:grid-cols-4 lg:py-8">
                            <div>
                                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Company
                                </h2>
                                <ul class="font-medium text-gray-500 dark:text-gray-400">
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">About</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Careers</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Brand Center</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Blog</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Help
                                    center</h2>
                                <ul class="font-medium text-gray-500 dark:text-gray-400">
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Discord Server</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Twitter</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Facebook</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Legal
                                </h2>
                                <ul class="font-medium text-gray-500 dark:text-gray-400">
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Privacy Policy</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Licensing</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Terms &amp; Conditions</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h2 class="mb-6 text-sm font-semibold uppercase text-gray-900 dark:text-white">Download
                                </h2>
                                <ul class="font-medium text-gray-500 dark:text-gray-400">
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">iOS</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Android</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">Windows</a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="#cta" class="hover:underline">MacOS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                handleButtonClick(1);
                document.body.scrollIntoView({
                    behavior: 'smooth'
                });
                const scrollFunction = () => {
                    const navbar = document.getElementById("navbar");
                    const logo = document.getElementById("logo");
                    const isScrolled = window.scrollY > 80;

                    navbar.classList.toggle("py-4", !isScrolled);
                    navbar.classList.toggle("xl:py-9", !isScrolled);
                    navbar.classList.toggle("text-white", !isScrolled);
                    navbar.classList.toggle("py-3", isScrolled);
                    navbar.classList.toggle("xl:py-6", isScrolled);
                    navbar.classList.toggle("bg-slate-100", isScrolled);
                    navbar.classList.toggle("text-black", isScrolled);
                };
                window.addEventListener("scroll", scrollFunction);
            });

            const sendMessage = (nama_produk) => {
                let currentTime = new Date();
                let hours = currentTime.getHours();
                let minutes = currentTime.getMinutes();
                let timeOfDay = (hours < 12) ? "morning" : (hours < 18) ? "afternoon" : "evening";
                let productName = nama_produk;
                let phoneNumber = "6282113050357";
                let message = "Hello PT Erlangga Nusantara Ekspor,\nGood " + timeOfDay +
                    ".\nI would like to inquire about your product, namely " +
                    productName;
                let encodedMessage = encodeURIComponent(message);
                let whatsappLink = "https://wa.me/" + phoneNumber + "?text=" + encodedMessage;

                window.open(whatsappLink, '_blank');
            };

            const sendEmail = (product_name) => {
                let currentTime = new Date();
                let hours = currentTime.getHours();
                let minutes = currentTime.getMinutes();
                let timeOfDay = (hours < 12) ? "morning" : (hours < 18) ? "afternoon" : "evening";
                let productName = product_name;
                let emailAddress = "order@terlangganusantaraekspor.com"; // Replace with the desired email address
                let subject = "Inquiry for Product " + productName;
                let message = "Hello PT Erlangga Nusantara Ekspor,\n\nGood " + timeOfDay +
                    ".\nI would like to inquire about your product, namely " + productName +
                    ".\n\nKind regards,\n[Your Name]"; // Replace [Your Name] with your name or other contact information

                let encodedSubject = encodeURIComponent(subject);
                let encodedMessage = encodeURIComponent(message);

                let emailLink = "mailto:" + emailAddress + "?subject=" + encodedSubject + "&body=" + encodedMessage;

                window.location.href = emailLink;
            };
        </script>
        <x-speed-dial />
        <x-footer />
    </body>

</html>
