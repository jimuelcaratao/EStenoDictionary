<x-user-layout>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
          <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("img/hero.jpg");'>
            <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-75 bg-black"
            ></span>
          </div>
          <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
              <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                <div class="md:pr-12">
                  <h1 class="text-white font-semibold text-5xl">
                    E-STENO DICTIONARY WEBSITE.
                  </h1>
                  <p class="mt-4 text-lg text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-gray-200 fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
        </div>
        <div class="pb-20 bg-gray-200 -mt-24">
          <div class="container mx-auto px-4">

            <div class="flex flex-wrap">
              <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                >
                  <div class="px-4 py-5 flex-auto">
                    <h6 class="text-xl font-semibold uppercase">Gregg 1 Dictionary</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit.
                    </p>
                    <a href="{{ route('gregg1') }}">
                      <button class="text-white font-semibold py-2 px-5 text-sm mt-3 inline-flex items-center group rounded-md" style="background-color: #261F16;">
                          <p>GREGG 1</p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                          </svg>
                        </button>
                      </a>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                >
                  <div class="px-4 py-5 flex-auto">
                    <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full" style="background-color: #261F16;"
                    >
                    <i class="fas fa-book"></i>
                    </div>
                    <h6 class="text-xl font-semibold">E-STENO</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit.
                    </p>
                  </div>
                </div>
              </div>
              <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                >
                  <div class="px-4 py-5 flex-auto">
                    <h6 class="text-xl font-semibold uppercase">Gregg 2 Dictionary</h6>
                    <p class="mt-2 mb-4 text-gray-600">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit.
                    </p>
                    <a href="{{ route('gregg1') }}">
                      <button class="text-white font-semibold py-2 px-5 text-sm mt-3 inline-flex items-center group rounded-md" style="background-color: #261F16;">
                          <p>GREGG 2</p>
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 group-hover:translate-x-2 delay-100 duration-200 ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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


            <div id="About" class="flex flex-wrap items-center mt-32">
              <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                <div
                  class="text-[#261F16] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                >
                  <i class="fas fa-question text-xl"></i>
                </div>
                <h3 class="text-3xl mb-2 font-semibold leading-normal" style="color: #261F16;">
                  What is Stenography?
                </h3>
                <p
                  class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                >
                Stenography, commonly known as shorthand, is a method of quick writing that uses
                symbols in place of letters, words and phrases. It's used to make note taking easier
                in classes, lectures and business meetings. It is still being used to take notes even
                with the advent of personal recording devices.
                </p>

              </div>
              <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                  <img
                    alt="..."
                    src="https://images.unsplash.com/photo-1590099543482-3b3d3083a474?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=704&q=80"
                    class="max-w-full rounded-lg shadow-lg"
                  />
              </div>
            </div>
          </div>
        </div>
        <div class="relative py-20">
          <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-white fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
          <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
              <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1590099543482-3b3d3083a474?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=704&q=80"
                />
              </div>
              <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                  <div
                  class="text-[#261F16] p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                >
                  <i class="fas fa-book text-xl"></i>
                </div>
                  <h3 class="text-3xl font-semibold" style="color: #261F16;">Stenography in early stage</h3>
                  <p class="mt-4 text-lg leading-relaxed text-gray-600">
                    The term "stenography" comes from the Greek word "stenos," which means narrow or small
                    and refers to the narrowing of words into symbols. Even though the word has come to be
                    used synonymously with the term shorthand, it technically is the physical process of
                    transcribing in shorthand either with a writing implement or a stenography machine.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Team" class="pt-20 pb-48">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
              <div class="w-full lg:w-6/12 px-4">
                <h2 class="text-4xl font-semibold" style="color: #261F16;">Here are our Team</h2>
                <p class="text-lg leading-relaxed m-4 text-gray-600">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
              </div>
            </div>
            <div class="flex flex-wrap">
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="img/team/team-1-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold" style="color: #261F16;">Ryan Tompson</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Web Developer
                    </p>
                    <div class="mt-6">
                        <button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i>
                        </button>
                        <button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="img/team/team-2-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold" style="color: #261F16;">Romina Hadid</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Marketing Specialist
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i>
                        </button>
                        <button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="img/team/team-3-800x800.jpg"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold" style="color: #261F16;">Alexa Smith</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      UI/UX Designer
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i>
                        </button>
                        <button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                <div class="px-6">
                  <img
                    alt="..."
                    src="img/team/team-4-470x470.png"
                    class="shadow-lg rounded-full max-w-full mx-auto"
                    style="max-width: 120px;"
                  />
                  <div class="pt-6 text-center">
                    <h5 class="text-xl font-bold" style="color: #261F16;">Jenna Kardi</h5>
                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                      Founder and CEO
                    </p>
                    <div class="mt-6">
                      <button
                        class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-facebook-f"></i>
                        </button>
                        <button
                        class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                      >
                        <i class="fab fa-instagram"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</x-user-layout>
