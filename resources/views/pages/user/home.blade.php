<x-user-layout>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("img/hero.jpg");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-8/12 px-4 ml-auto mr-auto text-center">
                    <div class="md:pr-5">
                        <h1 class="text-white font-semibold text-5xl">
                            E-STENO DICTIONARY WEBSITE.
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">


                            Gregg Shorthand is a system of rapid writing based on the sounds of words that uses the
                            curvilinear motion of ordinary longhand. The Series 90 version, one of the 7 versions of
                            Gregg Shorthand books, was published for the 90th anniversary. The revision involves system
                            changes to make learning and writing easier and more consistent. More word beginnings and
                            endings were dropped. More words are spelled out and not abbreviated as in previous
                            versions. For that reason, it is overall slower than previous versions. It's mostly
                            applicable for business and general note-taking.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="pb-20 bg-gray-200 -mt-24">
        <div class="container mx-auto px-4">

            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold uppercase">Gregg 1 Dictionary</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Gregg Shorthand Volume One Series 90 consists of better, more logical business letters
                                that have a vast number of unfamiliar words that came from the letters provided by the
                                book.
                            </p>
                            <a href="{{ route('gregg1') }}">
                                <button
                                    class="text-white font-semibold py-2 px-5 text-sm mt-3 inline-flex items-center group rounded-md"
                                    style="background-color: #261F16;">
                                    <p>GREGG 1</p>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full"
                                style="background-color: #261F16;">
                                <i class="fas fa-book"></i>
                            </div>
                            <h6 class="text-xl font-semibold">E-STENO</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                It is the expected output of the study, which is an electronic resource that lists the
                                unfamiliar words (in alphabetical order) and explains what they mean.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <h6 class="text-xl font-semibold uppercase">Gregg 2 Dictionary</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Gregg Shorthand Volume Two Series 90 is the continuation of Gregg Shorthand Volume One
                                Series 90.
                            </p>
                            <a href="{{ route('gregg2') }}">
                                <button
                                    class="text-white font-semibold py-2 px-5 text-sm mt-3 inline-flex items-center group rounded-md"
                                    style="background-color: #261F16;">
                                    <p>GREGG 2</p>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div id="Search" class="container md:w-11/12 relative justify-center items-center mx-auto rounded-lg p-10 md:p-20" style="background-color: #fff;">
              <audio id="sound"></audio>
              <div class="">
                  <div class="wrapper">
                      <div class="search-input">
                          <a href="" target="_blank" hidden></a>
                          <input type="text" placeholder="Type to search.." class="text-base text-gray-800 flex-grow outline-none px-2 py-3"
                          id="inp-word" >
                          <div class="autocom-box" style="background-color: #fff;">
                          </div>
                          <div class="icon" id="search-btn"><i class="fas fa-search" style="color: #261F16;"></i></div>
                      </div>
                  </div>
                  <div class="result" id="result" ></div>

                  <div class="steno_result" id="steno_result"></div>
              </div>
            </div> --}}



            {{-- <div id="About" class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <div
                        class="text-[#261F16] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-question text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal" style="color: #261F16;">
                        Gregg 1 Dictionary
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Gregg Shorthand Volume One Series 90 consists of better, more logical business letters that have a vast number of unfamiliar words that came from the letters provided by the book. As part of stenography learning, unfamiliar words are given in the semi-middle part of the book that will help you broaden your vocabulary as well as improve your speed. Unfamiliar words that you might encounter in the Gregg shorthand volume one series 90 book can be found in this part of the E-Steno Dictionary.
                    </p>
                    <a href="{{ route('gregg1') }}">
                        <button
                            class="text-white font-semibold py-2 px-5 text-sm mt-3 mb-10 inline-flex items-center group rounded-md"
                            style="background-color: #261F16;">
                            <p>GREGG 1</p>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <img alt="..."
                        src="img/gregg/GREGG 1.jpg"
                        class="max-w-full rounded-lg shadow-lg" />
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img alt="..." class="max-w-full rounded-lg shadow-lg"
                        src="img/gregg/GREGG 2.jpg" />
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-[#261F16] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                            <i class="fas fa-book text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold" style="color: #261F16;">Gregg 2 Dictionary</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            Gregg Shorthand Volume Two Series 90 is the continuation of Gregg Shorthand Volume One Series 90. It consists of more business letters and grammar building. This also consists of a vast number of unfamiliar words. They can be encountered at the very start of the book, given that it is a continuation of volume one. Unfamiliar words that could be encountered in volume two can be found in this part of the E-Steno Dictionary.
                        </p>
                        <a href="{{ route('gregg2') }}">
                            <button
                                class="text-white font-semibold py-2 px-5 text-sm mt-7 inline-flex items-center group rounded-md"
                                style="background-color: #261F16;">
                                <p>GREGG 2</p>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="Team" class="pt-10 pb-24" style="background-color: #E5E7EB;">
        <div class="container mx-auto px-20">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-8/12 px-4">
                    <h2 class="text-2xl font-semibold" style="color: #261F16;">Here are our Team</h2>
                    <div class="flex flex-column gap-4">
                        <img src="img/logo/UCC Logo.png" class="w-16" alt=ucc-logo>
                        <h2 class="text-4xl uppercase mt-3 mx-auto" style="color: #261F16;">university of caloocan city
                        </h2>
                        <img src="img/logo/PASOA logo.png" class="w-16" alt=ucc-logo>
                    </div>

                    {{-- <p class="text-lg leading-relaxed m-4 text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p> --}}
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5">
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Alondra Mae L. Gales - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Alondra Mae L. Gales</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Angelica B. Delabajan - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Angelica B. Delabajan</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Angelica Claire A. De Vera - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Angelica Claire A. De Vera</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Bernadine P. Clava - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Bernadine P. Clava</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Elsie T. Tangente - Researcher.gif"
                            class="shadow-lg rounded-full mx-auto object-contain bg-white"
                            style="width: 125px; height: 125px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Elsie T. Tangente</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Ericca Joyce N. Santonia - Researcher.png"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Ericca Joyce N. Santonia</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Hannah Rose T. Delos Poyos - Researcher.jpg"
                            class="shadow-lg rounded-full mx-auto object-contain bg-white"
                            style="width: 125px; height: 125px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Hannah Rose T. Delos Poyos</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Jessa Mae J. Borbe - Researcher.jpg"
                            class="shadow-lg rounded-full mx-auto object-contain bg-white"
                            style="width: 125px; height: 125px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Jessa Mae J. Borbe</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/John Francis L. Nabus - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">John Francis L. Nabus</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:mb-20 mb-12 px-4">
                    <div class="px-6">
                        <img alt="..." src="img/team/Sandra Patricia B. Regatcho - Researcher.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto" style="max-width: 120px;" />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold" style="color: #261F16;">Sandra Patricia B. Regatcho</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Researcher
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/home.js') }}" defer></script>
        <script>
            let gregg = [
                "Channel",
                "CodingLab",
                "CodingNepal",
                "YouTube",
                "YouTuber",
                "YouTube Channel",
                "Blogger",
                "Bollywood",
                "Vlogger",
                "Vechiles",
                "Facebook",
                "Freelancer",
                "Facebook Page",
                "Designer",
                "Developer",
                "Web Designer",
                "Web Developer",
                "Login Form in HTML & CSS",
                "How to learn HTML & CSS",
                "How to learn JavaScript",
                "How to become Freelancer",
                "How to become Web Designer",
                "How to start Gaming Channel",
                "How to start YouTube Channel",
                "What does HTML stands for?",
                "What does CSS stands for?",
            ];
            let gregg_content = [{
                    name: "YouTube",
                    video: "https://www.youtube.com/embed/4demEYCkxwE",
                    other: "that"
                },
                {
                    name: "Channel",
                    video: "https://www.youtube.com/embed/BvkUYfzYGg4",
                    other: "that"
                },
            ];
        </script>
    @endpush
</x-user-layout>
