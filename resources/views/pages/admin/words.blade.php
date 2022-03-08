<x-app-layout>

    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Words
                </h2>
            </div>

            {{-- <x-jet-validation-errors class="mb-4" /> --}}

            <div class=" flex lg:mt-0 lg:ml-4">
                <span class="sm:ml-3">
                    @auth
                        @if (Auth::user()->is_admin == 1)
                            <button data-bs-toggle="modal" data-bs-target="#add-modal" type="button"
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                                <!-- Heroicon name: solid/plus -->
                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                Add Word
                            </button>
                        @endif
                    @endauth
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="mb-4">
                <form>
                    <input class="focus:ring-indigo-500 focus:border-indigo-500  sm:text-sm border-gray-300 rounded-md"
                        type="search" name="search" placeholder="Word name" aria-label="Search"
                        value="{{ request()->search }}">

                    <button type="submit" class="text-gray-600 hover:text-gray-800 mx-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
            </div>

            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">

                <x-main-table>
                    {{-- Col --}}
                    <x-slot name="tableColumn">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Word ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Word
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                YouTube Link
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date Created
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </x-slot>
                    {{-- Rows --}}
                    <x-slot name="tableRow">
                        @forelse ($words as $word)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $word->word_id }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $word->word_name }}
                                        </div>
                                    </div>
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $word->category_name }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $word->description }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $word->default_video }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $word->status }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 font-bold">
                                        {{ \Carbon\Carbon::parse($word->created_at)->format('d / F / Y') }}
                                    </div>
                                </td>
                                <td class="pl-2 pr-6 py-4 whitespace-nowrap flex text-right text-base font-medium">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit-modal-word"
                                        data-tooltip="tooltip" data-placement="top" title="Edit"
                                        data-community="{{ json_encode($word) }}"
                                        data-item-word_id="{{ $word->word_id }}"
                                        data-item-word_name="{{ $word->word_name }}"
                                        data-item-category_name="{{ $word->category_name }}"
                                        data-item-status="{{ $word->status }}"
                                        data-item-description="{{ $word->description }}"
                                        data-item-default_photo="{{ $word->default_photo }}"
                                        data-item-default_video="{{ $word->default_video }}"
                                        data-item-photo_1="{{ $word->photo_1 }}"
                                        data-item-photo_2="{{ $word->photo_2 }}" id="edit-item-word"
                                        class="text-indigo-600 hover:text-indigo-900 mr-3 text-decoration-none">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form class="delete-word"
                                        action="{{ route('words.destroy', [$word->word_id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="pr-4 py-8 whitespace-nowrap text-sm font-medium text-center">

                                    Hmmm.. There is no Words in here. Add some more.
                                </td>
                            </tr>
                        @endforelse
                    </x-slot>
                </x-main-table>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center">
            {{-- pagination --}}
            <div class="pagination">
                {{ $words->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>



    <x-word.add-modal>
        <x-slot name="categoryOptions">
            @foreach ($categories as $category)
                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
            @endforeach
        </x-slot>
    </x-word.add-modal>
    <x-word.edit-modal>
        <x-slot name="categoryOptions">
            @foreach ($categories as $category)
                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
            @endforeach
        </x-slot>
    </x-word.edit-modal>


    @push('scripts')
        <script>
            //delete
            $(".delete-word").click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure to Delete?",
                        text: "Once you Deleted, theres no turning back!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $(e.target)
                                .closest("form")
                                .submit(); // Post the surrounding form
                        } else {
                            return false;
                        }
                    });
            });


            // if word not null
            $('#word_name').on('input', function(e) {
                $('#submit_word').removeAttr('disabled');
            });
        </script>
    @endpush
</x-app-layout>
