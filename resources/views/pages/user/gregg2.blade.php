
<x-user-layout>
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style='background-image: url("img/gregg-2.jpg");'>
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
                  GREGG 2 DICTIONARY
                </h1>
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

          <div id="Search" class="container md:w-11/12 relative justify-center items-center mx-auto rounded-lg p-10 md:p-20" style="background-color: #fff;">
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
          </div>

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
</x-user-layout>
