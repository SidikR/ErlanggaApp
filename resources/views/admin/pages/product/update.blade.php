@extends('admin/layouts/index')
@section('content')
    @include('admin/pages/product/partials/breadcrumb')
    <main class="mx-6 mt-3 rounded-lg border-gray-200 bg-slate-50 p-6 shadow-lg dark:border-gray-700">

        <h1 class="mb-4 text-center text-4xl font-bold text-gray-900">Edit Product</h1>
        @if (session('success'))
            <div class="flex justify-center">
                <div id="toast-success"
                    class="mb-4 flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                    role="alert">
                    <div
                        class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-500 dark:bg-green-800 dark:text-green-200">
                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
                    <button type="button"
                        class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                        data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif
        <form action={{ route('products.update', ['product' => $product->uuid]) }} method="post"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="h-full xl:flex">
                <div class="mx-4 content-center p-8 xl:max-w-[50%]">

                    <div
                        class="aspect-w-2 aspect-h-1 relative h-full w-full overflow-hidden rounded-lg shadow-lg xl:h-[400px] xl:w-[400px]">
                        <img class="transform-gpu object-contain transition-transform hover:scale-110"
                            src="{{ asset('img/products/' . $product->image) }}" alt="Foto untuk {{ $product->name }}"
                            id="croppedImageForm">
                    </div>
                    <div class="mt-3 flex justify-center">
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                            class="block rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            <i class="bi bi-cloud-arrow-up"></i>
                            Update Picture
                        </button>
                    </div>

                </div>
                <div class="xl:w-full">
                    <div class="mb-4">
                        <label for="product_name"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Product
                            Name</label>
                        <input type="text" id="product_name" name="product_name" value="{{ $product->name }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="Plase input product name ex. Sugar Coconut" required>
                        {{-- Error message --}}
                        @error('product_name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description_product"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description
                            Product</label>
                        <textarea id="description_product" rows="17" name="description_product"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">{{ $product->description }}</textarea>
                        {{-- Error message --}}
                        @error('description_product')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 flex justify-end">
                        <button type="submit"
                            class="mb-6 mr-2 flex gap-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <i class="bi bi-pencil-square"></i>
                            Save Changes
                        </button>
                    </div>
                    @include('admin.pages.product.partials.modal-update')
                </div>
            </div>
        </form>
    </main>


    <script>
        let cropper;
        let cropButton = document.getElementById('cropButton');
        let dropZoneBox = document.getElementById('dropzone-file-box')
        let previewImageZone = document.getElementById('previewImageZone')
        let croppedImageView = document.getElementById('croppedImageView');
        let inputValue = document.getElementById("croppedImageInput");
        let previewContainer = document.getElementById('previewContainer');
        let chooseImageAgain = document.getElementById('chooseImageAgain');
        let saveButton = document.getElementById('saveButton');
        let wrapperInput = document.getElementById('wrapper-input');
        let imagePreviewBox = document.getElementById('imagePreviewBox')


        cropButton.addEventListener('click', function() {
            if (cropper) {
                let canvas = cropper.getCroppedCanvas();
                canvas.toBlob(function(blob) {
                    let webpDataURL = canvas.toDataURL('image/webp', 1.0).split(',')[1];
                    let webpBlob = new Blob([blob], {
                        type: 'image/webp'
                    });
                    let formData = new FormData();
                    formData.append('croppedImage', webpBlob);
                }, 'image/jpeg');


                croppedImageView.src = canvas.toDataURL(
                    'image/jpeg');
                croppedImageForm.src = canvas.toDataURL(
                    'image/jpeg');
                inputValue.value = canvas.toDataURL('image/jpeg');
                dropZoneBox.style.display = 'none';
                previewContainer.style.display = 'block';
                previewImageZone.style.display = 'none';
                chooseImageAgain.style.display = 'block';
                saveButton.style.display = 'block';
                cropButton.style.display = 'none';

            } else {
                console.error('Cropper is not initialized');
            }
            console.log('Cropper is initialized');
        });

        chooseImageAgain.addEventListener('click', function() {
            dropZoneBox.style.display = 'flex';
            previewContainer.style.display = 'none';
            previewImageZone.style.display = 'none';
            cropButton.style.display = 'none';
        })

        saveButton.addEventListener('click', function() {
            wrapperInput.classList.add('md:flex');
            wrapperInput.classList.remove('hidden');
            // wrapperInput.style.display = 'block';
            imagePreviewBox.style.display = 'block';
        })

        function initializeCropper(image) {
            // Ensure image is loaded before initializing Cropper
            image.onload = function() {
                let aspectRatio = 1;

                cropper = new Cropper(image, {
                    aspectRatio: aspectRatio,
                    viewMode: 1
                });

                cropButton.style.display = 'block';
            };
        }

        function handleFileSelect(files) {
            previewImageZone.style.display = 'block';
            dropZoneBox.style.display = 'none';

            if (cropper) {
                cropper.destroy();
            }

            let reader = new FileReader();
            reader.onload = function() {
                let image = document.getElementById('previewImage');
                image.src = reader.result;
                initializeCropper(image);
            };
            reader.readAsDataURL(files[0]);
        }

        dropZoneBox.addEventListener('dragover', function(e) {
            e.preventDefault();
            // dropZoneBox.classList.add('bg-gray-300', 'border', 'border-dashed', 'border-gray-400', 'p-4');
        });

        dropZoneBox.addEventListener('drop', function(e) {
            e.preventDefault();
            handleFileSelect(e.dataTransfer.files);
        });

        document.getElementById('dropzone-file').addEventListener('change', function(e) {
            handleFileSelect(e.target.files);
        });
    </script>
@endsection
