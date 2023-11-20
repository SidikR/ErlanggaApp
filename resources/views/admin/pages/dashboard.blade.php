@extends('admin/layouts/index')
@section('content')
    <section id="cards" class="m-10 flex gap-3">
        @foreach ($cards as $card)
            <div
                class="max-w-sm rounded-lg border border-gray-200 bg-white p-6 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-center gap-2">
                    <a href="#">
                        <h5 class="mb-2 text-7xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $card['count'] }}
                        </h5>
                    </a>
                    <p class="mb-3 text-4xl font-normal text-gray-700 dark:text-gray-400">{{ $card['name'] }}</p>
                </div>

                <a href="{{ route($card['route']) }}"
                    class="inline-flex w-full items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Go to Page
                    <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        @endforeach
    </section>
@endsection
