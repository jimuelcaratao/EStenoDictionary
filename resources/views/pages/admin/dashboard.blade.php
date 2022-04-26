<x-app-layout>
    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-2xl sm:truncate">
                    Dashboard
                </h2>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">

                <div class="flex flex-wrap  px-6 mx-0 md:mx-4 mb-4 md:mb-8 md:mb-6 md:mt-4">
                    <div class="w-full px-6 py-8 bg-gradient-to-r from-purple-200 to-purple-400 rounded shadow-sm">
                        <h2 class="font-bold text-gray-700 text-lg md:text-2xl">{{ $dayTerm }}, <span
                                class="uppercase">{{ Auth::user()->name }}</span> 👋</h2>
                        <h5 class=" text-sm md:text-base">here is whats happening:</h5>
                    </div>
                </div>
                <div class="flex flex-wrap">

                    <div class="w-full md:w-1/2 xl:w-1/4 p-6">
                        <!--Metric Card-->
                        <a href="#" class="text-decoration-none">
                            <div
                                class="bg-gradient-to-b from-purple-200 to-purple-100 border-b-4 border-purple-600 rounded-lg shadow-xl p-3">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-purple-600"><i
                                                class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text text-gray-600 text-sm">Total Gregg 1 Words
                                        </h5>
                                        <h3 class="font-bold text-2xl text-black">{{ $gregg_1 }}<span
                                                class="text-purple-500"></span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/4 p-6">
                        <!--Metric Card-->
                        <a href="#" class="text-decoration-none">
                            <div
                                class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-3">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-green-600"><i
                                                class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600 text-sm">Total Gregg 2 Words</h5>
                                        <h3 class="font-bold text-2xl text-black">{{ $gregg_2 }}<span
                                                class="text-green-500"></span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/4 p-6">
                        <!--Metric Card-->
                        <a href="{{ route('users') }}" class="text-decoration-none">
                            <div
                                class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-3">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-pink-600"><i
                                                class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600 text-sm">Total Users</h5>
                                        <h3 class="font-bold text-2xl text-black">{{ $users }} <span
                                                class="text-pink-500"></span></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/4 p-6">
                        <!--Metric Card-->
                        <a href="{{ route('users') }}" class="text-decoration-none">
                            <div
                                class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-3">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-yellow-600"><i
                                                class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600 text-sm">New Users</h5>
                                        <h3 class="font-bold text-2xl text-black">{{ $new_users }}<span
                                                class="text-yellow-600"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!--/Metric Card-->
                    </div>
                </div>


                {{-- Charts --}}
                <div class="flex flex-row flex-wrap flex-grow">

                    {{-- most populart products --}}
                    <div class="w-full  xl:w-1/3 p-4 lg:pl-10">
                        <div class="bg-white h-96 rounded p-5 shadow-md hover:shadow-xl transition delay-75">
                            <h3 class="font-bold text-2xl">Most Latest Words</h3>
                            @forelse ($popular_items as $popular_item)
                                <li>
                                    <a href="">
                                        {{ \Illuminate\Support\Str::limit($popular_item->word_name, 20) }}
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        </div>
                    </div>

                    <div class="w-full  xl:w-2/3 p-4 lg:pr-10">
                        <div class="bg-white h-96 rounded p-5 shadow-md hover:shadow-xl transition delay-75">
                            <div id="chartContainerVisits" style="height: 300px; width: 100%;"></div>
                        </div>
                    </div>
                </div>

                {{-- <div class="flex flex-row flex-wrap flex-grow">

                    <div class="w-full  p-4 lg:pl-10">
                        <div class="bg-white h-96 rounded p-5 shadow-md hover:shadow-xl transition delay-75">
                            <div id="chartContainerVisits" style="height: 300px; width: 100%;"></div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    @push('scripts')

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            var page_visits = {!! json_encode($page_visits->toArray(), JSON_HEX_TAG) !!};

            console.log(page_visits);

            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            const d = new Date();

            window.onload = function() {

                var chart2 = new CanvasJS.Chart("chartContainerVisits", {
                    animationEnabled: true,
                    title: {
                        text: "ESteno Web Visits Per Day"
                    },
                    axisY: {
                        // title: "Revenue in PHP",
                        valueFormatString: "#0.",
                        // prefix: "₱"
                    },
                    data: [{
                        type: "splineArea",
                        color: "rgba(54,158,173,.7)",
                        markerSize: 5,
                        xValueFormatString: "YYYY-MM-DD",
                        yValueFormatString: "#,##0.##",
                        dataPoints: [
                            @foreach ($page_visits as $page_visit)
                                { x: new Date("{{ $page_visit->day }}"), y: {{ $page_visit->count }} },
                            @endforeach
                        ]
                    }]
                });
                chart2.render();

            }
        </script>

    @endpush
</x-app-layout>
