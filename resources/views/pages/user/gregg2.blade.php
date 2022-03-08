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
                            GREGG 2 DICTIONARY
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
                        <div class="search-input">
                            <a href="" target="_blank" hidden></a>
                            <input type="text" placeholder="Type to search.."
                                class="text-base text-gray-800 flex-grow outline-none px-2 py-3" id="inp-word">
                            <div class="autocom-box" style="background-color: #fff;">
                            </div>
                            <div class="icon" id="search-btn"><i class="fas fa-search"
                                    style="color: #261F16;"></i></div>
                        </div>
                    </div>
                    <div class="result" id="result"></div>
                    <div class="steno_result" id="steno_result"></div>

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
                    <div
                        class="text-[#261F16] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-question text-xl"></i>
                    </div>
                    <h3 class="text-3xl mb-2 font-semibold leading-normal" style="color: #261F16;">
                        What is Stenography?
                    </h3>
                    <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                        Stenography, commonly known as shorthand, is a method of quick writing that uses
                        symbols in place of letters, words and phrases. It's used to make note taking easier
                        in classes, lectures and business meetings. It is still being used to take notes even
                        with the advent of personal recording devices.
                    </p>
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <img alt="..."
                        src="https://images.unsplash.com/photo-1590099543482-3b3d3083a474?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=704&q=80"
                        class="max-w-full rounded-lg shadow-lg" />
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        <script>
            const url = "https://api.dictionaryapi.dev/api/v2/entries/en/";
            const result = document.getElementById("result");
            const steno_result = document.getElementById("steno_result");
            const sound = document.getElementById("sound");
            const btn = document.getElementById("search-btn");

            btn.addEventListener("click", () => {
                steno_result.innerHTML = null;

                let inpWord = document.getElementById("inp-word").value;
                let obj = gregg1_content.find(o => o.name === inpWord);
                console.log(obj);
                if (obj != null) {
                    steno_result.innerHTML = `
                  <center>
                          <iframe id="ytplayer" type="text/html" class="yt-player mt-10"
                              src="${obj.video}" frameborder="0"></iframe>
                          <img class="wordimg mt-10" src="{{ asset('storage/words_${obj.id}_${obj.default_photo}') }}"
                              alt="${obj.name}'s steno image">

                      </center>
                  `;
                } else {
                    steno_result.innerHTML = `<h3 class="error">Couldn't Find The Steno Video for this Word.</h3>`;
                }

                fetch(`${url}${inpWord}`)
                    .then((response) => response.json())
                    .then((data) => {
                        console.log(data);
                        result.innerHTML = `
          <div class="word">
                  <h3>${inpWord}</h3>
                  <button onclick="playSound()">
                      <i class="fas fa-volume-up"></i>
                  </button>
              </div>
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
                        result.innerHTML = `<h3 class="error">Couldn't Find The Word</h3>`;
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
                
                    },
                @endforeach
            ];
        </script>
    @endpush
</x-user-layout>
