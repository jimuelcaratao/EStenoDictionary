<x-app-layout>

    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Users
                </h2>
            </div>

            {{-- <x-jet-validation-errors class="mb-4" /> --}}

            <div class=" flex lg:mt-0 lg:ml-4">
                @if (Auth::user()->is_admin == 1)
                    <span class="sm:ml-3">
                        <button data-bs-toggle="modal" data-bs-target="#add-modal" type="button"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                            <!-- Heroicon name: solid/plus -->
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Add User
                        </button>
                    </span>
                @endif



            </div>
        </div>
    </x-slot>


    <div class="pt-8 pb-12 px-4 md:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Header --}}
            <div class="flex flex-row pb-4 md:pb-6 justify-between ">
                <div>
                    {{-- search --}}
                    <form class="flex">
                        <div>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input
                                    class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-20  sm:text-sm border-gray-300 rounded-md"
                                    type="search" name="search" placeholder="Search.." aria-label="Search"
                                    value="{{ request()->search }}">
                                <div class="absolute inset-y-0 left-0 flex items-center">
                                    <label for="search_col" class="sr-only">Currency</label>
                                    <select id="search_col" name="search_col"
                                        class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                        @if (!empty(request()->search_col))
                                            <option class="bg-gray-200" disabled
                                                selected="{{ request()->search_col }}">{{ request()->search_col }}
                                            </option>
                                        @endif
                                        <option value="Name">Name</option>
                                        <option value="Email">Email</option>
                                        {{-- <option>Type</option> --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="text-gray-600 hover:text-gray-800 mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div>
                </div>

            </div>


            {{-- Table --}}
            <x-main-table>
                {{-- Col --}}

                <x-slot name="tableColumn">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            TYPE
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Full name
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                        </th>
                        {{-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Social Media
                        </th> --}}

                        {{-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Banned Date
                        </th> --}}
                        <th scope="col-3"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date Created
                        </th>

                        @if (Auth::user()->is_admin == 1)
                            <th scope="col"
                                class="flex flex-row px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        @endif
                    </tr>
                </x-slot>

                <x-slot name="tableRow">
                    @forelse ($users as $user)
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">
                                @if ($user->is_admin == 2)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Moderator
                                    </span>
                                @elseif($user->is_admin == 1)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Admin
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Normal
                                    </span>
                                @endif

                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->name }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $user->email }}</div>
                            </td>
                            {{-- <td class="px-6 py-2 whitespace-nowrap">
                                @if ($user->external_provider == 'Facebook')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $user->external_provider }}
                                    </span>
                                @elseif ($user->external_provider == 'Google')
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        {{ $user->external_provider }}
                                    </span>
                                @else
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        None
                                    </span>
                                @endif
                            </td> --}}

                            {{-- @if (empty($user->is_banned))
                                <td class="px-6 py-2 py-4 whitespace-nowrap">
                                    <div
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Not Banned</div>
                                </td>
                            @else
                                <td class="px-6 py-2 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->is_banned }}</div>
                                </td>
                            @endif --}}


                            <td class="px-6 py-2 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d / F / Y') }}</div>
                            </td>

                            @if (Auth::user()->is_admin == 1)
                                <td class="px-6 py-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm py-4 font-medium text-gray-900">

                                                <a href="#" data-bs-toggle="modal" data-bs-target="#edit-modal"
                                                    data-item-id="{{ $user->id }}" id=""
                                                    class="edit-password text-purple-600 no-underline hover:text-purple-900 mr-5">Edit</a>

                                            </div>
                                        </div>
                                        {{-- <div class="ml-4">
                                            <div class="text-sm py-4 font-medium text-gray-900">


                                                @if ($user->is_banned != null)
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirm-modal"
                                                        data-item-id="{{ $user->id }}" id=""
                                                        class="confirm-password text-red-600 no-underline hover:text-red-900 mr-5">Activate</a>
                                                @endif

                                                @empty($user->is_banned)
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#confirm-modal"
                                                        data-item-id="{{ $user->id }}" id=""
                                                        class="confirm-password text-red-600 no-underline hover:text-red-900 mr-5">Deactivate</a>
                                                @endempty



                                            </div>
                                        </div> --}}

                                    </div>
                                </td>
                            @endif

                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="pr-4 py-2 whitespace-nowrap text-sm font-medium text-center">
                                <img class="mx-auto d-block text-center py-4" style="width: 275px"
                                    src="{{ asset('images/components/no-products.svg') }}" alt="no users">
                                Hmmm.. There is no users in here yet.
                            </td>
                        </tr>
                    @endforelse


                </x-slot>
            </x-main-table>


        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center">
            {{-- pagination --}}
            <div class="pagination">
                {{ $users->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add-modal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="add-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-modalLabel">Add User</h5>
                    <button type="button" class="btn-close closeModalClick" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="{{ route('users.store') }}" method="POST" id="add-form">
                            @csrf
                            <h4> User information </h4>
                            <div class="mt-10 sm:mt-0">
                                <div class="mt-3 md:mt-0 md:col-span-2">
                                    <div class="overflow-hidden ">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="is_admin"
                                                        class="block text-sm font-medium text-gray-700">Role <span
                                                            class="text-red-600">*</span></label>
                                                    <select id="is_admin" name="is_admin" required
                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="0">Reader</option>
                                                        <option value="2">Moderator</option>
                                                        <option value="1">Admin</option>

                                                    </select>
                                                </div>

                                                <div class=" col-span-6 sm:col-span-4">
                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Full name
                                                        <span class="text-red-600">*</span></label>
                                                    <input type="text" name="name" id="name" required
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class=" col-span-6 sm:col-span-4">
                                                    <label for="email"
                                                        class="block text-sm font-medium text-gray-700">Email
                                                        <span class="text-red-600">*</span></label>
                                                    <input type="text" name="email" id="email" required
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>


                                                <div class=" col-span-6 sm:col-span-4">
                                                    <label for="password"
                                                        class="block text-sm font-medium text-gray-700">Password
                                                        <span class="text-red-600">*</span></label>
                                                    <input type="text" name="password" id="password" required
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div div class="modal-footer">
                                <button type="button" class="btn btn-secondary closeModalClick">Cancel</button>
                                <button id="submit_category" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit-modal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="edit-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modalLabel">Edit User</h5>
                    <button type="button" class="btn-close close-modal-edit" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="{{ route('users.update') }}" method="POST" id="edit-form">
                            @csrf
                            @method('PUT')
                            <div class=" sm:mt-0">
                                <div class=" md:mt-0 md:col-span-2">
                                    <div class="overflow-hidden ">
                                        <div class="px-4 py-5 bg-white sm:p-6">

                                            <div class="grid grid-cols-6 gap-6">

                                                <div class=" col-span-6 sm:col-span-4">
                                                    <input type="text" name="id" id="id" required
                                                        class="hidden mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="is_admin"
                                                        class="block text-sm font-medium text-gray-700">Role <span
                                                            class="text-red-600">*</span></label>
                                                    <select id="is_admin" name="is_admin" required
                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option selected disabled value="">Choose...</option>
                                                        <option value="0">Reader</option>
                                                        <option value="2">Moderator</option>
                                                        <option value="1">Admin</option>

                                                    </select>
                                                </div>

                                                <div class=" col-span-6 sm:col-span-4">
                                                    <label for="password"
                                                        class="block text-sm font-medium text-gray-700">Confirm your
                                                        Password <span class="text-red-600">*</span></label>
                                                    <input type="password" name="password" id="password" required
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div div class="modal-footer">
                                <button type="button" class="btn btn-secondary close-modal-edit">Cancel</button>
                                <button id="submit_edit" type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="confirm-modal" data-bs-backdrop="static" data-bs-keyboard="false"
        aria-labelledby="confirm-modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirm-modalLabel">Confirm Password</h5>
                    <button type="button" class="btn-close close-modal-confirm" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form action="{{ route('user.ban') }}" method="POST" id="confirm-form">
                            @csrf
                            <div class=" sm:mt-0">
                                <div class=" md:mt-0 md:col-span-2">
                                    <div class="overflow-hidden ">
                                        <div class="px-4 py-5 bg-white sm:p-6">

                                            <div class="grid grid-cols-6 gap-6">

                                                <div class=" col-span-6 sm:col-span-4">
                                                    <input type="text" name="id" id="id-confirm" required
                                                        class="hidden mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                                <div class=" col-span-6 sm:col-span-4">
                                                    <label for="password"
                                                        class="block text-sm font-medium text-gray-700">Password <span
                                                            class="text-red-600">*</span></label>
                                                    <input type="password" name="password" id="password" required
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div div class="modal-footer">
                                <button type="button" class="btn btn-secondary close-modal-confirm">Cancel</button>
                                <button id="submit_confirm" type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

                    </div>


                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {




                // $("#submit_confirm").click(function() {
                //     $('#confirm-form').submit();
                // });

                $(".close-modal-confirm").click(function() {
                    swal({
                            title: "Are you sure to close?",
                            text: "Have a nice day.",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                // OnClose
                                $('#confirm-modal').modal('hide');
                            } else {
                                return false;
                            }
                        });
                });
            });

            $(document).ready(function() {
                $(document).on("click", ".confirm-password", function() {
                    $(this).addClass(
                        "edit-item-trigger-clicked"
                    ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
                    var options = {
                        backdrop: "static"
                    };
                    $("#confirm-modal").modal(options);
                    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                    var row = el.closest(".data-row");

                    // get the data
                    var id = el.data("item-id");

                    $("#id-confirm").val(id);

                });
                // on modal hide
                $("#confirm-modal").on("hide.bs.modal", function() {
                    $(".edit-item-trigger-clicked").removeClass(
                        "edit-item-trigger-clicked"
                    );
                    $("#confirm-form").trigger("reset");


                });
            });

            $(document).ready(function() {
                $(".close-modal-edit").click(function() {
                    swal({
                            title: "Are you sure to close?",
                            text: "Have a nice day.",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                // OnClose
                                $('#edit-modal').modal('hide');
                            } else {
                                return false;
                            }
                        });
                });
            });

            $(document).ready(function() {
                $(document).on("click", ".edit-password", function() {
                    $(this).addClass(
                        "edit-item-trigger-clicked"
                    ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
                    var options = {
                        backdrop: "static"
                    };
                    $("#edit-modal").modal(options);
                    var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                    var row = el.closest(".data-row");

                    // get the data
                    var id = el.data("item-id");

                    $("#id").val(id);

                });
                // on modal hide
                $("#edit-modal").on("hide.bs.modal", function() {
                    $(".edit-item-trigger-clicked").removeClass(
                        "edit-item-trigger-clicked"
                    );
                    $("#edit-form").trigger("reset");


                });
            });
        </script>
    @endpush


    @push('scripts')
        <script>
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

                            } else {
                                return false;
                            }
                        });
                });
            });
        </script>
    @endpush

</x-app-layout>
