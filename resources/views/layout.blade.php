<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }} : way to learn next language</title>
    <meta name="description" content="{{ config('app.name') }}: way to learn next language" />
    <meta name="keywords" content="{{ config('app.name') }}, learn arabic, learn turkish" />
    <meta name="author" content="{{ config('app.name') }}" />

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

		@yield('content')

		<footer class="bg-white border-t border-gray-400 shadow">
					<div class="container max-w-4xl mx-auto flex py-8">

						<div class="w-full mx-auto flex flex-wrap">
							<div class="flex w-full md:w-1/2 ">
								<div class="px-8">
									<h3 class="font-bold text-gray-900">About</h3>
									<p class="py-4 text-gray-600 text-sm">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
									</p>
								</div>
							</div>

							<div class="flex w-full md:w-1/2">
								<div class="px-8">
									<h3 class="font-bold text-gray-900">Build with</h3>
									<ul class="list-reset items-center text-sm pt-3">
										<li>
											<a class="inline-block text-green-600 no-underline hover:text-green-900 hover:underline py-1" href="https://laravel.com" data-cy="laravel">Laravel</a>
										</li>
										<li>
											<a class="inline-block text-green-600 no-underline hover:text-green-900 hover:underline py-1" href="https://tailwindcss.com" data-cy="tailwindcss">Tailwindcss</a>
										</li>
										<li>
											<a class="inline-block text-green-600 no-underline hover:text-green-900 hover:underline py-1" href="https://www.cypress.io" data-cy="cypress">Cypress</a>
										</li>
										<li data-cy="tailwindbox">With templates from 
											<a class="inline-block text-green-600 no-underline hover:text-green-900 hover:underline" href="https://www.tailwindtoolbox.com" >Tailwindbox</a>
										</li>
									</ul>
								</div>
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
