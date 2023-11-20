<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard Admin</title>
        {{-- Import Tailwind --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Import Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin.style.css') }}">

        <link rel="shortcut icon" href="{{ asset('img/logo.webp') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.css"
            integrity="sha512-bs9fAcCAeaDfA4A+NiShWR886eClUcBtqhipoY5DM60Y1V3BbVQlabthUBal5bq8Z8nnxxiyb1wfGX2n76N1Mw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.js"
            integrity="sha512-Zt7blzhYHCLHjU0c+e4ldn5kGAbwLKTSOTERgqSNyTB50wWSI21z0q6bn/dEIuqf6HiFzKJ6cfj2osRhklb4Og=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!-- Tambahkan script js-cookie -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

        <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css" />

        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/fixedheader/3.3.2/css/fixedHeader.bootstrap.min.css" />


    </head>

    <body class="relative h-screen overflow-hidden">

        <div class="animate__animated animate__bounceInRight fixed right-8 top-20" id="toast-container">
            @if (session('success'))
                <div id="toast"
                    class="mb-4 flex w-full max-w-xs flex-col items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                    role="alert" style="display: none;">
                    <div class="flex w-full flex-initial items-center justify-between">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="sr-only">Check icon</span>
                        </div>

                        <div class="ms-3 text-sm font-normal text-green-800">{{ session('success') }}</div>

                        <button type="button"
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-2.5 h-2.5 w-full">
                        <!-- Tambahkan ID "progress-bar" pada div progress bar -->
                        <div id="progress-bar" class="h-2.5 rounded-full bg-green-800 ring-1 ring-green-800"
                            style="width: 100%"></div>
                    </div>
                </div>
            @endif
            @if (session('error'))
                <div id="toast"
                    class="mb-4 flex w-full max-w-xs flex-col items-center rounded-lg bg-white p-4 text-gray-500 shadow-lg dark:bg-gray-800 dark:text-gray-400"
                    role="alert" style="display: none;">
                    <div class="flex w-full flex-initial items-center justify-between">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal text-red-800">{{ session('error') }}</div>
                        <button type="button"
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-2.5 h-2.5 w-full">
                        <!-- Tambahkan ID "progress-bar" pada div progress bar -->
                        <div id="progress-bar" class="h-2.5 rounded-full bg-red-800 ring-1 ring-red-800"
                            style="width: 100%"></div>
                    </div>
                </div>
            @endif
        </div>

        {{-- Header --}}
        <header>
            @include('admin/layouts/partials/navbar')
        </header>

        <div class="flex h-[85%] flex-row overflow-hidden">
            {{-- sidebar --}}
            @include('admin/layouts/partials/aside')

            <div class="h-full w-screen flex-initial flex-col overflow-visible overflow-y-auto">
                @yield('content')
            </div>
            {{-- main --}}
        </div>
        @include('admin/layouts/partials/footer')
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toastContainer = document.getElementById('toast-container');
                var toastCount = document.getElementById('toast');

                if (toastContainer) {
                    // Tampilkan toast
                    showToast(toastCount);

                    // Animasi progress bar selama 3 detik dari 100% ke 0%
                    animateProgressBar(3000, toastCount);

                    // Setelah 3 detik, hilangkan toast dan progress bar
                    setTimeout(function() {
                        hideToast(toastCount);
                        setTimeout(function() {
                            removeToast(toastCount);
                        }, 300); // Waktu untuk animasi fade out (300 milidetik)
                    }, 3000);
                }
            });

            function showToast(count) {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.style.display = 'flex';
                }
            }

            function hideToast(count) {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.style.opacity = 0;
                }
            }

            function removeToast(count) {
                var toast = document.getElementById('toast');
                if (toast) {
                    toast.remove();
                }
            }

            function animateProgressBar(duration, count) {
                var startTime = new Date().getTime();
                var endTime = startTime + duration;
                var progressBar = document.getElementById('progress-bar');

                function updateProgressBar() {
                    var currentTime = new Date().getTime();
                    var progress = 1 - Math.min((currentTime - startTime) / duration, 1);

                    // Atur lebar progress bar sesuai dengan kemajuan waktu
                    progressBar.style.width = (progress * 100) + '%';

                    if (currentTime < endTime) {
                        requestAnimationFrame(updateProgressBar);
                    }
                }

                updateProgressBar();
            }
        </script>
    </body>

</html>
