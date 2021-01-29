<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tailwind CSS Skeleton</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  -->
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--Replace with your tailwind.css once created-->
    <link
      href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css"
      rel="stylesheet"
    />
    <!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->

    <style>
      @import url("https://rsms.me/inter/inter.css");
      html {
        font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
          "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
          "Noto Color Emoji";
      }

      .gradient {
        background-image: linear-gradient(-225deg, #cbbacc 0%, #2580b3 100%);
      }

      button,
      .gradient2 {
        background-color: #f39f86;
        background-image: linear-gradient(315deg, #f39f86 0%, #f9d976 74%);
      }

      /* Browser mockup code
 * Contribute: https://gist.github.com/jarthod/8719db9fef8deb937f4f
 * Live example: https://updown.io
 */

      .browser-mockup {
        border-top: 2em solid rgba(230, 230, 230, 0.7);
        position: relative;
        height: 60vh;
      }

      .browser-mockup:before {
        display: block;
        position: absolute;
        content: "";
        top: -1.25em;
        left: 1em;
        width: 0.5em;
        height: 0.5em;
        border-radius: 50%;
        background-color: #f44;
        box-shadow: 0 0 0 2px #f44, 1.5em 0 0 2px #9b3, 3em 0 0 2px #fb5;
      }

      .browser-mockup > * {
        display: block;
      }

      /* Custom code for the demo */
    </style>
  </head>

  <body class="gradient leading-relaxed tracking-wide flex flex-col">
		<nav id="header" class="fixed w-full z-10 top-0">

			<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

			<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">

				<div class="pl-4">
					<a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="#">
					{{ config('app.name') }}
					</a>
				</div>

				<div class="block lg:hidden pr-4">
					<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
					</button>
				</div>

				<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">

				</div>
			</div>
		</nav>

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 text-white py-1 lg:py-6">
      <div
        class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-2 lg:py-6"
      >
        <div class="pl-4 flex items-center">
          <a
            class="text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="#"
          >
		{{ config('app.name')}}
          </a>
        </div>

        <div class="block lg:hidden pr-4">
          <button
            id="nav-toggle"
            class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-green-500 appearance-none focus:outline-none"
          >
          </button>
        </div>

        <div
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-black  lg:p-0 z-20"
          id="nav-content"
        > 
					<ul class="list-reset lg:flex justify-end flex-1 items-center">
						<li class="mr-3">
							<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="#">Active</a>
						</li>
						<li class="mr-3">
							<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="#">link</a>
						</li>
						<li class="mr-3">
							<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="#">link</a>
						</li>

						<li class="">
						    @if (Route::has('login'))
							<div class="hidden  px-6 py-4 sm:block">
							    @auth
								<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700">Dashboard</a>
							    @else
								<button id="navAction" class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75"
																  >
								<a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a>
																  </button>
								@if (Route::has('register'))

								  <button
								    id="navAction"
								    class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75"
								  ><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Sign Up</a>
								  </button>
								@endif
							    @endauth
							</div>
						    @endif

						</li>
					</ul>
        </div>
      </div>
    </nav>

    <div class="container mx-auto h-screen">
      <div class="text-center px-3 lg:px-0">
        <h1
          class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight"
        >
          Main Hero Message to sell yourself!
        </h1>
        <p
          class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8"
        >
          Sub-hero message, not too long and not too short. Make it just right!
        </p>

        <button
          class="mx-auto lg:mx-0 hover:underline text-gray-800 font-extrabold rounded my-2 md:my-6 py-4 px-8 shadow-lg w-48"
        >
          Sign Up
        </button>
        <a
          href="#"
          class="inline-block mx-auto lg:mx-0 hover:underline bg-transparent text-gray-600 font-extrabold my-2 md:my-6 py-2 lg:py-4 px-8"
          >View Additional Action</a
        >
      </div>

      <div class="flex items-center w-full mx-auto content-end">
        <div
          class="browser-mockup flex flex-1 m-6 md:px-0 md:m-12 bg-white w-1/2 rounded shadow-xl"
        ></div>
      </div>
    </div>

    <section class="bg-white border-b py-12 ">
      <div
        class="container mx-auto flex flex-wrap items-center justify-between pb-12"
      >
        <h2
          class="w-full my-2 text-xl font-black leading-tight text-center text-gray-800 lg:mt-8"
        >
          Our Customers / Featured in
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div
          class="flex flex-1 flex-wrap max-w-4xl mx-auto items-center justify-between text-xl text-gray-500 font-bold opacity-75"
        >
          <span class="w-1/2 p-4 md:w-auto flex items-center"
            >
            >Blog</span
          >
          <span class="w-1/2 p-4 md:w-auto flex items-center"
            >
            >Blogs Suggested</span
          >

          <span class="w-1/2 p-4 md:w-auto flex items-center"
            >
            >Podcasts Suggested</span
          >

          <span class="w-1/2 p-4 md:w-auto flex items-center"
            >
            >Hire Translator</span
          >


        </div>
      </div>
    </section>

    <section class="bg-gray-100 border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          Title
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Lorem ipsum dolor sit amet
            </h3>
            <p class="text-gray-600 mb-8">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
              at ipsum eu nunc commodo posuere et sit amet ligula.<br /><br />

              Images from:
              <a class="text-orange-500 underline" href="https://undraw.co/"
                >undraw.co</a
              >
            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6">
          </div>
        </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Lorem ipsum dolor sit amet
              </h3>
              <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.<br /><br />
                Images from:
                <a class="text-orange-500 underline" href="https://undraw.co/"
                  >undraw.co</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-white border-b py-8">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          Title
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div
            class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"
          >
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
                GETTING STARTED
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Lorem ipsum dolor sit amet.
              </div>
              <p class="text-gray-600 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div
            class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
          >
            <div class="flex items-center justify-start">
              <button
                class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"
              >
                Action
              </button>
            </div>
          </div>
        </div>

        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div
            class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"
          >
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
                GETTING STARTED
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Lorem ipsum dolor sit amet.
              </div>
              <p class="text-gray-600 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div
            class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
          >
            <div class="flex items-center justify-center">
              <button
                class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"
              >
                Action
              </button>
            </div>
          </div>
        </div>

        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div
            class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow"
          >
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6 mt-6">
                GETTING STARTED
              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
                Lorem ipsum dolor sit amet.
              </div>
              <p class=" text-gray-600 text-base px-6 mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.
              </p>
            </a>
          </div>
          <div
            class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
          >
            <div class="flex items-center justify-end">
              <button
                class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-extrabold rounded my-6 py-4 px-8 shadow-lg"
              >
                Action
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-100 py-8">
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          Pricing
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div
          class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4"
        >
          <div
            class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4"
          >
            <div
              class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow"
            >
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Free
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div
              class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
            >
              <div
                class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"
              >
                £0 <span class="text-base">for one user</span>
              </div>
              <div class="flex items-center justify-center">
                <button
                  class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </div>

          <div
            class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 gradient shadow hover:shadow-lg z-10"
          >
            <div class="flex-1 rounded-t rounded-b-none overflow-hidden">
              <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
              <ul class="w-full text-center text-base font-bold">
                <li class="py-4">Thing</li>
                <li class="py-4">Thing</li>
                <li class="py-4">Thing</li>
                <li class="py-4">Thing</li>
              </ul>
            </div>
            <div
              class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden p-6"
            >
              <div class="w-full pt-6 text-4xl font-bold text-center">
                £x.99 <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button
                  class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </div>

          <div
            class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4"
          >
            <div
              class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow"
            >
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                Pro
              </div>
              <ul class="w-full text-center text-sm">
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
                <li class="border-b py-4">Thing</li>
              </ul>
            </div>
            <div
              class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6"
            >
              <div
                class="w-full pt-6 text-3xl text-gray-600 font-bold text-center"
              >
                £x.99 <span class="text-base">/ per user</span>
              </div>
              <div class="flex items-center justify-center">
                <button
                  class="mx-auto lg:mx-0 hover:underline gradient2 text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="gradient w-full mx-auto text-center pt-6 pb-12">
      <h2
        class="w-full my-2 text-5xl font-black leading-tight text-center text-white"
      >
        Call to Action
      </h2>
      <div class="w-full mb-4">
        <div
          class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"
        ></div>
      </div>

      <h3 class="my-4 text-3xl font-extrabold">
About 
		{{ config('app.name') }}
      </h3>

      <button
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded my-6 py-4 px-8 shadow-lg"
      >
        Action!
      </button>
    </section>

    <!--Footer-->
    <footer class="bg-white ">
      <div class="container mx-auto mt-8 px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6">
            <a
              class="text-orange-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
              href="#"
            >
		{{ config('app.name') }}
            </a>
          </div>

          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >FAQ</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Help</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Support</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Terms</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Privacy</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Facebook</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Linkedin</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Twitter</a
                >
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase font-extrabold text-gray-500 md:mb-6">
              Company
            </p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Official Blog</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >About Us</a
                >
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a
                  href="#"
                  class="font-light no-underline hover:underline text-gray-800 hover:text-orange-500"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
