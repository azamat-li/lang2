<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name') }} blog</title>
    <meta name="author" content="{{ config('app.name') }}" />
    <meta name="description" content="{{ config('app.name') }} - блок для изучения турецкого языка" />
    <meta name="keywords" content="{{ config('app.name') }}, турецкий грамматика,турецкий лексика" />
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--Replace with your tailwind.css once created-->
  </head>

  
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

	<nav id="header" class="fixed w-full z-10 top-0">

		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>

		<div class="w-full md:max-w-4xl mx-auto lg:flex flex-wrap items-center justify-between mt-0 py-3">
			<ul class="list-reset pl-4 lg:flex lg:items-center lg:justify-end lg:gap-x-6 gap-x-4 text-center">
				<li class="lg:flex lg:content-center text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl lg:mx-2 mx-1" 			data-cy="index">
					<a href="/">
						{{ config('app.name') }}
					</a>
				</li>
				<li class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl lg:mx-2 mx-1"  data-cy="posts">
					<a href="/posts">
						Подбор редакции
					</a>
				</li>
			</ul>

			<div class="block lg:hidden pr-4">
				<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
				</button>
			</div>

			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
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
				</ul>
			</div>
		</div>
	</nav>

	<!--Container-->
	<div class="container w-full md:max-w-3xl mx-auto pt-20">

		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">

			<!--Blogs suggested-->
			<ul data-cy="blogs-suggested">
					<li class="mt-6">
						<h4 class="text-lg font-bold"><a href="https://fluentinturkish.com" >Fluent in Turkish blog</a></h4>
						<div class="">
							Блог Грамматики Турецкого Языка
						</div>
						<div class="px-3 pt-1 pb-3">
							<!--Tags -->
							<div class="text-base md:text-sm text-gray-500 pb-2">
								Языковой уровень  <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Основные уровни</a>  
								Язык изучения  <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Турецкий</a>  
							</div>
						</div>
					</li>

					<li class="mt-6">
						<h4 class="text-lg font-bold"><a href="https://learnturkishwithturkishcoffee.com" >Learn Turkish With Turkish Coffee Blog</a></h4>
						<div class="">
							Истории Для Среднего Уровня Турецкого Языка
						</div>
						<div class="px-3 pt-1 pb-3">
							<!--Tags -->
							<div class="text-base md:text-sm text-gray-500 pb-2">
								Языковой уровень  <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Средний уровнь</a>  
								Язык изучения  <a href="#" class="text-base md:text-sm text-green-500 no-underline hover:underline">Турецкий</a>  
							</div>
						</div>
					</li>
			
			</ul>

			<!--/ Post Content-->
		</div>

		<!--Divider-->
		<hr class="border-b-3 border-transparent">
		<hr class="border-b-2 border-transparent mb-8 mx-4">

		<!--Subscribe-->
		<div class="container px-4">
			<div class="font-sans bg-gradient-to-b from-green-100 to-gray-100 rounded-lg shadow-xl p-4 text-center">
				<h2 class="font-bold break-normal text-xl md:text-3xl">Подписаться</h2>
				<h3 class="font-bold break-normal text-gray-600 text-sm md:text-base">Получать последние посты {{ config('app.name') }}</h3>
				<div class="w-full text-center pt-4">
					<form action="#" data-cy="sform">
						<div class="max-w-xl mx-auto p-1 pr-0 flex flex-wrap items-center">
							<input data-cy="sinput" type="email" placeholder="youremail@example.com" class="flex-1 mt-4 appearance-none border border-gray-400 rounded shadow-md p-3 text-gray-600 mr-2 focus:outline-none">
							<button type="submit" class="flex-1 mt-4 block md:inline-block appearance-none bg-green-500 text-white text-base font-semibold tracking-wider uppercase py-4 rounded shadow hover:bg-green-400">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Subscribe-->

		<!--Divider-->
		<hr class="border-b-2 border-gray-400 mb-8 mx-4">

	</div>
	<!--/container-->

	<footer class="bg-white border-t border-gray-400 shadow">
		<div class="container max-w-4xl mx-auto flex py-8">

			<div class="w-full mx-auto flex flex-wrap">
				<div class="flex w-full md:w-1/2 ">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">Об Услугах</h3>
						<p class="py-4 text-gray-600 text-sm">
							{{ config('app.name') }} </p>
					</div>
				</div>

				<div class="flex w-full md:w-1/2">
					<div class="px-8">
						<h3 class="font-bold text-gray-900">Social</h3>
						<ul class="list-reset items-center text-sm pt-3">
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
							</li>
							<li>
								<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>



		</div>
	</footer>

	<script>
		/* Progress bar */
		//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
		var h = document.documentElement,
			b = document.body,
			st = 'scrollTop',
			sh = 'scrollHeight',
			progress = document.querySelector('#progress'),
			scroll;
		var scrollpos = window.scrollY;
		var header = document.getElementById("header");
		var navcontent = document.getElementById("nav-content");

		document.addEventListener('scroll', function() {

			/*Refresh scroll % width*/
			scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
			progress.style.setProperty('--scroll', scroll + '%');

			/*Apply classes for slide in bar*/
			scrollpos = window.scrollY;

			if (scrollpos > 10) {
				header.classList.add("bg-white");
				header.classList.add("shadow");
				navcontent.classList.remove("bg-gray-100");
				navcontent.classList.add("bg-white");
			} else {
				header.classList.remove("bg-white");
				header.classList.remove("shadow");
				navcontent.classList.remove("bg-white");
				navcontent.classList.add("bg-gray-100");

			}

		});


		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function() {
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>

</html>
