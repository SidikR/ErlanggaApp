<!-- resources/views/components/custom_pagination.blade.php -->

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="mt-4 flex items-center justify-between">
        <span class="hidden sm:block">
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                        <span
                            class="relative inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500">
                            {!! __('pagination.previous') !!}
                        </span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="focus:shadow-outline-blue relative inline-flex items-center rounded-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none active:bg-gray-100 active:text-gray-700">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span
                                class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700">
                                {{ $element }}
                            </span>
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span
                                        class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700">
                                        {{ $page }}
                                    </span>
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="focus:shadow-outline-blue relative -ml-px inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none active:bg-gray-100 active:text-gray-700">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="focus:shadow-outline-blue relative -ml-px inline-flex items-center rounded-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out hover:text-gray-500 focus:border-blue-300 focus:outline-none active:bg-gray-100 active:text-gray-700">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                        <span
                            class="relative -ml-px inline-flex cursor-default items-center rounded-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium leading-5 text-gray-500">
                            {!! __('pagination.next') !!}
                        </span>
                    </span>
                @endif
            </span>
        </span>
    </nav>
@endif
