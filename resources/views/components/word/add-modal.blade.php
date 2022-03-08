<!-- Modal -->
<div class="modal fade" id="add-modal" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="add-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add-modalLabel">Add word</h5>
                <button type="button" class="btn-close closeModalClick" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="{{ route('words.store') }}" method="POST" id="add-form"
                        enctype="multipart/form-data">
                        @csrf
                        <h4> Word information </h4>
                        <div class="mt-10 sm:mt-0">
                            <div class="mt-3 md:mt-0 md:col-span-2">
                                <div class="overflow-hidden ">
                                    <div class="px-4  bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="category_name"
                                                    class="block text-sm font-medium text-gray-700">Category <span
                                                        class="text-red-600">*</span></label>
                                                <select id="category_name" name="category_name" required
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option selected disabled value="">Choose...</option>
                                                    {{ $categoryOptions }}
                                                </select>
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label for="status"
                                                    class="block text-sm font-medium text-gray-700">Status <span
                                                        class="text-red-600">*</span></label>
                                                <select id="status" name="status" required
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>Available</option>
                                                    <option>Not Available</option>
                                                </select>
                                            </div>

                                            <div class=" col-span-6 sm:col-span-4">
                                                <label for="word_name"
                                                    class="block text-sm font-medium text-gray-700">Word name <span
                                                        class="text-red-600">*</span></label>
                                                <input type="text" name="word_name" id="word_name" required
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>



                                            <div class="form-basic  col-span-6 sm:col-span-4">
                                                <label for="description"
                                                    class="block text-sm font-medium text-gray-700">
                                                    Description
                                                </label>
                                                <div class="mt-1">
                                                    <textarea id="description" name="description" rows="3"
                                                        class="shadow-sm  focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                                        placeholder="you@example.com"></textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    Brief description for your Product. URLs are hyperlinked.
                                                </p>
                                            </div>



                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-basic  hidden sm:block" aria-hidden="true">
                            <div class="">
                                <div class="border-t border-gray-200"></div>
                            </div>
                        </div>

                        <h4 class="form-basic  mt-3">Media Management</h4>
                        <div class="form-basic  mt-3 md:mt-0 md:col-span-2">
                            <div class=" sm:overflow-hidden">
                                <div class="px-4  bg-white space-y-6 sm:p-6">

                                    <div class=" col-span-6 sm:col-span-4">
                                        <label for="default_video"
                                            class="block text-sm font-medium text-gray-700">YouTube
                                            Link
                                            <span class="text-red-600">*</span></label>
                                        <input type="text" name="default_video" id="default_video" required
                                            placeholder="https://www.youtube.com/embed/6j3hPg0t5fo"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <p class="mt-2 text-sm text-gray-500">
                                            Modify the YT link and add "/embed/"
                                            ex. https://www.youtube.com/watch?v=6j3hPg0t5fo to
                                            https://www.youtube.com/embed/6j3hPg0t5fo.
                                        </p>
                                    </div>
                                    <div class="grid">
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Cover photo
                                            </label>
                                            <div
                                                class="mt-1 flex justify-center px-6 py-3 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">

                                                    <img id="output_default_photo" class="cursor-pointer mb-4"
                                                        src="{{ asset('img/cover-img.svg') }}"
                                                        style="width:400px;height:200px;">

                                                    <div class="flex text-sm text-gray-600 ">
                                                        <label for="default_photo"
                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span class="align-middle text-center">Upload a file</span>
                                                            <input id="default_photo" name="default_photo" type="file"
                                                                required class="sr-only"
                                                                accept=".jpg,.gif,.png,.jpeg">
                                                        </label>
                                                        {{-- <p class="pl-1">or drag and drop</p> --}}
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 5MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div div class="modal-footer">
                            <button type="button" class="btn btn-secondary closeModalClick">Cancel</button>
                            <button id="submit_word" type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#output_default_photo').click(function() {
            $('#default_photo').trigger('click');
        });

        $(document).on("change", "#default_photo", function() {
            document.getElementById('output_default_photo').src = window.URL.createObjectURL(this.files[0])
        });

        $(document).ready(function() {
            $(".closeModalClick").click(function() {
                swal({
                        title: "Are you sure?",
                        text: "Once you Discard, theres no turning back!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            // OnClose
                            $('#add-modal').modal('hide');
                            $("#add-form").trigger("reset");

                            // $('#submit_word').attr('disabled', 'disabled');
                        } else {
                            return false;
                        }
                    });
            });
        });
    </script>
@endpush
