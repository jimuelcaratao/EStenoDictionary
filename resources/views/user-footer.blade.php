<footer class="relative pt-8 pb-6" style="background-color: #261F16; color:#fff;">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4">
          <a href="#Home"><h4 class="text-3xl font-semibold">E-Steno Dictionary</h4></a>
          <h5 class="text-md mt-0 mb-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </h5>
          <div class="mt-6">
            <button
              class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-twitter"></i></button
            ><button
              class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-facebook-square"></i></button
            ><button
              class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-dribbble"></i></button
            ><button
              class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
              type="button"
            >
              <i class="flex fab fa-github"></i>
            </button>
          </div>
        </div>
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex flex-wrap items-top mb-6">
            <div class="w-full lg:w-4/12 px-4 ml-auto">
              <span
                class="block uppercase text-sm font-semibold mb-2"
                >Useful Links</span
              >
              <ul class="list-unstyled">
                <li>
                  <a
                    class="hover:text-yellow-500 block pb-2 text-sm"
                    href={{ route('home') }}
                    >Home</a
                  >
                </li>
                <li>
                  <a
                    class="hover:text-yellow-500 block pb-2 text-sm"
                    href="#Search"
                    >Search</a
                  >
                </li>
                <li>
                  <a
                    class="hover:text-yellow-500 block pb-2 text-sm"
                    href="#About"
                    >About</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-6 border-white" />
      <div
        class="flex flex-wrap items-center md:justify-between justify-center"
      >
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
          <div class="text-sm py-1">
            Copyright © <span id="date"></span> E-Steno Dictionary
          </div>
        </div>
      </div>
    </div>

    <script>
        const d = new Date();
        document.getElementById("date").innerHTML = d.getFullYear();
        </script>
  </footer>
