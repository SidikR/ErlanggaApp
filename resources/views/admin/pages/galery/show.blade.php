@extends('admin/layouts/index')
@section('content')
    @include('admin/pages/galery/partials/breadcrumb')
    <main class="mx-6 mt-3 rounded-lg border-gray-200 bg-slate-50 p-6 shadow-lg dark:border-gray-700">

        <h1 class="mb-4 text-center text-4xl font-bold text-gray-900">Detail Galery</h1>

        <div class="h-full xl:flex">
            <div class="mx-4 p-8 xl:max-w-[50%]">
                <div
                    class="aspect-w-2 aspect-h-1 relative h-full w-full overflow-hidden rounded-lg shadow-lg xl:h-[400px] xl:w-[400px]">
                    <img class="transform-gpu object-contain transition-transform hover:scale-110"
                        src="{{ asset('img/galery/' . $galery->image) }}" alt="Foto untuk {{ $galery->name }}">
                    <div
                        class="absolute inset-0 flex items-center justify-center opacity-0 backdrop-blur-sm transition-opacity hover:opacity-100">
                        <a href={{ asset('img/galery/' . $galery->image) }} target=__Blank><button
                                class="hover-button rounded-md bg-white p-2 text-lg text-gray-800" title="Lihat Gambar"><i
                                    class="bi bi-eye"></i> View</button></a>
                    </div>
                </div>
            </div>
            <div class="xl:w-full">
                <div class="mb-4">
                    <label for="galery_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Galery
                        Name</label>
                    <input disabled type="text" id="galery_name" name="galery_name" value="{{ $galery->name }}"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Plase input galery name ex. Sugar Coconut" required>
                </div>
                <div class="mb-4">
                    <label for="galery_category" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Galery
                        Category</label>
                    <input disabled type="text" id="galery_category" name="galery_category"
                        value="{{ $galery->kategory }}"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Plase input galery name ex. Sugar Coconut" required>
                </div>

                <div class="mb-4">
                    <label for="description_galery"
                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description
                        Galery</label>
                    <textarea disabled id="description_galery" rows="10" name="description_galery"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">{{ $galery->description }}</textarea>
                </div>

                <div class="mb-4 flex justify-end">
                    <a href={{ route('galery.edit', ['galery' => $galery->uuid]) }}> <button type="button"
                            class="mb-6 mr-2 flex gap-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <i class="bi bi-pencil-square"></i>
                            Edit Galery
                        </button>
                    </a>
                    <a href={{ route('galery.index') }}> <button type="button"
                            class="mb-6 mr-2 flex gap-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="bi bi-arrow-bar-left"></i>
                            Back
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </main>
@endsection
