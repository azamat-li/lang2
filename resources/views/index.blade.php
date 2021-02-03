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
	@extends('layout')

	@section('content')
    <div class="container mx-auto h-screen">
      <div class="text-center px-3 lg:px-0">
        <h1
          class="my-4 text-2xl md:text-3xl lg:text-5xl font-black leading-tight"
        >
		Another language learning portal
        </h1>
        <p
          class="leading-normal text-gray-800 text-base md:text-xl lg:text-2xl mb-8"
        >
		Learn Arabic, Turkish 
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
						<a href="/posts" data-cy="blog" >
							>Blog
						</a>
					</span
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
					Checkout latest  {{ config('app.name') }} posts
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
								Lorem ipsum dolor sit amet 2
              </h3>
              <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                at ipsum eu nunc commodo posuere et sit amet ligula.<br /><br />
          </div>
</section>
@endsection


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
