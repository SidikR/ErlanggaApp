                <!-- Main modal -->
                <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0 md:w-[calc(100%-2rem)]">
                    <div class="relative max-h-full w-full max-w-3xl p-4">
                        <!-- Modal content -->
                        <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">

                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Add Image Product
                                </h3>
                                <button type="button"
                                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="static-modal">
                                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>

                            <!-- Modal body -->
                            <div class="flex h-full w-full flex-col items-center justify-center">

                                {{-- Drop and Drag Input Image --}}
                                <label for="dropzone-file" id="dropzone-file-box"
                                    class="dark:hover:bg-bray-800 flex h-full w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                    <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                        <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" name="image_input" type="file" class="hidden"
                                        onchange="readURL(this);" />
                                </label>

                                {{-- Preview Cropper --}}
                                <div id="previewImageZone" class="hidden h-full w-full">
                                    <img src="" id="previewImage" alt="Preview Image">
                                </div>

                                {{-- Result Cropper --}}
                                <div id="previewContainer"
                                    class="aspect-w-2 aspect-h-1 relative hidden h-full w-full overflow-hidden xl:h-[400px] xl:w-[400px]">
                                    <img id="croppedImageView" alt="Cropped Image" class="object-contain">
                                    <input type="hidden" id="croppedImageInput" name="croppedImage">
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div
                                class="flex items-center justify-between rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                                <div class="flex justify-start gap-1">

                                    {{-- Crop Button --}}
                                    <button id="cropButton"
                                        class="hidden rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Crop Picture
                                    </button>

                                    {{-- Choose Image Again Button --}}
                                    <button id="chooseImageAgain"
                                        class="hidden rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                        Choose Image Again
                                    </button>
                                </div>
                                <div class="flex justify-end gap-1">
                                    {{-- save Button --}}
                                    <form action={{ route('products.update', ['product' => $product->uuid]) }}
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <button data-modal-hide="static-modal" type="button" id="saveButton"
                                            class="hidden rounded-lg bg-green-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Save</button>
                                    </form>

                                    {{-- Exit Button --}}
                                    <button data-modal-hide="static-modal" type="button"
                                        class="dark:custom-color-primary rounded-lg bg-custom-color-primary px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-custom-color-primary focus:outline-none focus:ring-4 focus:ring-blue-300 dark:hover:bg-custom-color-primary dark:focus:ring-custom-color-primary">Exit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
