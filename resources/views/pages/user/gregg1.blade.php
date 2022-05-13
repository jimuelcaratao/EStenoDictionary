<x-user-layout>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("img/gregg-1.jpg");'>
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="md:pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            GREGG 1 DICTIONARY
                        </h1>
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

            <div id="Search"
                class="container md:w-11/12 relative justify-center items-center mx-auto rounded-lg p-10 md:p-20"
                style="background-color: #fff;">
                <audio id="sound"></audio>
                <div class="">
                    <div class="wrapper">
                        <form id="searching" method="POST">
                            <div class="search-input">
                                <a href="" target="_blank" hidden></a>
                                <input type="text" placeholder="Type to search.."
                                    class="text-3xl text-gray-800 flex-grow outline-none px-2 py-3" id="inp-word">
                                <div class="autocom-box" style="background-color: #fff;">
                                </div>
                                <div class="icon" id="search-btn"><i class="fas fa-search"
                                        style="color: #261F16;"></i></div>
                            </div>
                        </form>
                    </div>

                    <div class="steno_result" id="steno_result"></div>
                    <div class="photo_1_result" id="photo_1_result"></div>
                    <div class="photo_2_result" id="photo_2_result"></div>
                    {{-- <div class="word mt-10">
                        <center>
                            <iframe id="ytplayer" type="text/html" class="yt-player mt-10"
                                src="https://www.youtube.com/embed/6j3hPg0t5fo" frameborder="0"></iframe>
                            <img class="wordimg mt-10" src="{{ asset('storage/words_5_Image-11.jpg') }}"
                                alt="${obj.name}'s steno image">

                        </center>
                    </div> --}}
                </div>
            </div>

            <div id="About" class="flex flex-wrap items-center mt-32">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <h3 class="text-3xl mb-2 font-semibold leading-normal" style="color: #261F16;">
                        Gregg 1 Dictionary
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Gregg Shorthand Volume One Series 90 consists of better, more logical business letters that have
                        a vast number of unfamiliar words that came from the letters provided by the book. As part of
                        stenography learning, unfamiliar words are given in the semi-middle part of the book that will
                        help you broaden your vocabulary as well as improve your speed. Unfamiliar words that you might
                        encounter in the Gregg shorthand volume one series 90 book can be found in this part of the
                        E-Steno Dictionary.
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <img alt="..." src="img/gregg/GREGG 1.jpg" class="max-w-full rounded-lg shadow-lg" />
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        <script>
            const url = "https://api.dictionaryapi.dev/api/v2/entries/en/";
            const result = document.getElementById("result");
            const steno_result = document.getElementById("steno_result");
            const photo_1_result = document.getElementById("photo_1_result");
            const photo_2_result = document.getElementById("photo_2_result");

            const sound = document.getElementById("sound");
            const btn = document.getElementById("search-btn");

            btn.addEventListener("click", () => {
                steno_result.innerHTML = null;
                photo_1_result.innerHTML = null;
                photo_2_result.innerHTML = null;

                let inpWord = document.getElementById("inp-word").value;
                let obj = gregg1_content.find(o => o.name === inpWord);
                console.log(obj);
                if (obj != null) {
                    steno_result.innerHTML = `

                        <div class="word mt-10">
                            <h3 class="text-5xl font-semibold capitalize">${obj.name}</h3>
                        </div>
                        <div class="details mt-2">
                            <p class="text-3xl">/${obj.spelling}/</p>
                        </div>

                        <p class="word-example text-3xl">
                            ${obj.description || ""}
                        </p>

                        
                        `;

                    if (obj.photo_1 != '') {
                        photo_1_result.innerHTML = `
                        <div class="flex inline flex gap-2">
                            <img class="wordimg mt-10" src="{{ asset('storage/words_photo_1_${obj.id}_${obj.photo_1}') }}"
                                alt="${obj.name}'s steno image">
                           
                            <img class="wordimg mt-10" src="{{ asset('storage/words_${obj.id}_${obj.default_photo}') }}"
                                alt="${obj.name}'s steno image">

                        </div>
                        <center>

                            <iframe id="ytplayer" type="text/html" class="yt-player mt-10"
                            src="${obj.video}" frameborder="0"></iframe>
                        </center>
                        `;
                    }

                    if (obj.photo_2 != '') {
                        photo_2_result.innerHTML = `
                            <center>
                            <img class="wordimg mt-10" src="{{ asset('storage/words_photo_2_${obj.id}_${obj.photo_2}') }}"
                                alt="${obj.name}'s steno image">
                            </center>
                        `;
                    } else {
                        photo_2_result.innerHTML = null;
                    }
                } else {
                    steno_result.innerHTML = `<h3 class="error">Couldn't Find The Steno Video for this Word.</h3>`;
                }

                fetch('http://127.0.0.1:8000/add_viewers', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json, text/plain, */*',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            inpWord: inpWord,
                        })
                    }).then(res => res.json())
                    .then((res) => {
                        console.log(res)
                    });


                fetch(`${url}${inpWord}`)
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data);
                        result.innerHTML = `

                <div class="details">
                    <p>${data[0].meanings[0].partOfSpeech}</p>
                    <p>/${data[0].phonetic}/</p>
                </div>
                <p class="word-meaning">
                   ${data[0].meanings[0].definitions[0].definition}
                </p>

                <p class="word-example">
                    ${data[0].meanings[0].definitions[0].example || ""}
                </p>`;
                        sound.setAttribute("src", `https:${data[0].phonetics[0].audio}`);
                    })
                    .catch(() => {
                        result.innerHTML = `<h3 class="error"></h3>`;
                    });
            });
        </script>
        <script src="{{ asset('js/gregg1.js') }}" defer></script>
        <script>
            // collections
            let gregg1_arr = {!! json_encode($gregg1_arr->toArray(), JSON_HEX_TAG) !!};

            console.log(gregg1_arr);

            let gregg1 = [
                @foreach ($gregg1_arr as $gregg)
                    "{{ $gregg->word_name }}",
                @endforeach
            ];

            let gregg1_content = [
                @foreach ($gregg1_arr as $gregg)
                    {
                        id: "{{ $gregg->word_id }}",
                        name: "{{ $gregg->word_name }}",
                        video: "{{ $gregg->default_video }}",
                        description: "{{ $gregg->description }}",
                        category: "{{ $gregg->category_name }}",
                        default_photo: "{{ $gregg->default_photo }}",
                        spelling: "{{ $gregg->spelling }}",
                        photo_1: "{{ $gregg->photo_1 }}",
                        photo_2: "{{ $gregg->photo_2 }}",
                    },
                @endforeach
            ];
        </script>
    @endpush
</x-user-layout>
