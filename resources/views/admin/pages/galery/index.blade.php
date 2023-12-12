@extends('admin/layouts/index')
@section('content')
    @include('admin/pages/galery/partials/breadcrumb')
    <main class="mx-6 mt-3 rounded-lg border-gray-200 bg-slate-50 p-6 shadow-lg dark:border-gray-700">

        <h1 class="mb-4 text-center text-4xl font-bold text-gray-900">List Galery Images</h1>

        <a href={{ route('galery.create') }}>
            <x-addButton>Add Galery</x-addButton>
        </a>
        <table id="tb_galery" class="dislay" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        galery name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($galery as $galery)
                    <tr
                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                        <td><?= $no++ ?></td>
                        <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $galery->name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $galery->kategory }}
                        </td>
                        <td class="px-6 py-4">
                            <img class="h-[100px] w-auto" src={{ asset('img/galery/' . $galery->image) }}
                                alt='{{ $galery->name }}'>

                        </td>
                        <td class="flex items-center px-6 py-4">

                            {{-- Read Button --}}
                            <a href={{ route('galery.show', ['galery' => $galery->uuid]) }}><button type="button"
                                    class="me-1 rounded-lg bg-green-700 px-2 py-1 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i
                                        class="bi bi-file-text-fill"></i> Read</button></a>

                            {{-- Update Button --}}
                            <a href={{ route('galery.edit', ['galery' => $galery->uuid]) }}><button type="button"
                                    class="me-1 rounded-lg bg-blue-700 px-2 py-1 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i
                                        class="bi bi-pencil-square"></i> Update</button></a>

                            {{-- Delete Buton --}}
                            <form action="{{ route('galery.destroy', ['galery' => $galery->uuid]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div id="popup-modal{{ $galery->name }}" tabindex="-1"
                                    class="animate__animated animate__bounceIn fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                    <div class="relative max-h-full w-full max-w-md p-4">
                                        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal{{ $galery->name }}">
                                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 text-center md:p-5">
                                                <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are
                                                    you sure you want to delete
                                                    this Gallery ?</h3>
                                                <button data-modal-hide="popup-modal{{ $galery->name }}" type="submit"
                                                    class="me-2 inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                                                    Yes, I'm sure
                                                </button>
                                                <button data-modal-hide="popup-modal{{ $galery->name }}" type="button"
                                                    class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" data-modal-target="popup-modal{{ $galery->name }}"
                                    data-modal-toggle="popup-modal{{ $galery->name }}"
                                    class="me-1 rounded-lg bg-red-700 px-2 py-1 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    <i class="bi bi-pencil-square"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            $(document).ready(function() {
                var tabel_inventaris = $('#tb_galery').DataTable({
                    // dom: 'Bflrtip',
                    responsive: true,
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, 'All'],
                    ],

                });
            });
        </script>
    </main>
@endsection
