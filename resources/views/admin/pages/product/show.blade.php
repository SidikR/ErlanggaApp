@extends('admin/layouts/index')
@section('content')
    @include('admin/pages/product/partials/breadcrumb')
    <main class="mx-6 mt-3 rounded-lg border-gray-200 bg-slate-50 p-6 shadow-lg dark:border-gray-700">

        <h1 class="mb-4 text-center text-4xl font-bold text-gray-900">Detail Product</h1>

        <div class="h-full xl:flex">
            <div class="mx-4 p-8 xl:max-w-[50%]">
                <div
                    class="aspect-w-2 aspect-h-1 relative h-full w-full overflow-hidden rounded-lg shadow-lg xl:h-[400px] xl:w-[400px]">
                    <img class="transform-gpu object-contain transition-transform hover:scale-110"
                        src="{{ asset('img/products/' . $product->image) }}" alt="Foto untuk {{ $product->name }}">
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 backdrop-blur-sm transition-opacity hover:opacity-100">
                        <a href={{ asset('img/products/' . $product->image) }} target=__Blank><button
                                class="hover-button rounded-md bg-white p-2 text-lg text-gray-800" title="Lihat Gambar"><i
                                    class="bi bi-eye"></i> View</button></a>
                    </div>
                </div>
            </div>
            <div class="xl:w-full">
                <div class="mb-4">
                    <label for="product_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <input disabled type="text" id="product_name" name="product_name" value="{{ $product->name }}"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Plase input product name ex. Sugar Coconut" required>
                </div>

                <div class="mb-4">
                    <label for="description_product"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description
                        Product</label>
                    <textarea disabled id="description_product" rows="17" name="description_product"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">{{ $product->description }}</textarea>
                </div>

                <div class="mb-4 flex justify-end">
                    <a href={{ route('products.edit', ['product' => $product->uuid]) }}> <button type="button"
                            class="mb-6 mr-2 flex gap-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <i class="bi bi-pencil-square"></i>
                            Edit Product
                        </button>
                    </a>
                    <a href={{ route('products.index') }}> <button type="button"
                            class="mb-6 mr-2 flex gap-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="bi bi-arrow-bar-left"></i>
                            Back
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-screen max-h-full w-screen items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-2xl p-4">
            <button type="button"
                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="static-modal">
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Static modal
                    </h3>
                    <button type="button"
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="space-y-4 p-4 md:p-5">
                    <img src="{{ asset('img/products/' . $product->image) }}" alt="Foto untuk {{ $product->name }}">
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                    <button data-modal-hide="static-modal" type="button"
                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="static-modal" type="button"
                        class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">Decline</button>
                </div>
            </div>
        </div>
    </div>
@endsection
