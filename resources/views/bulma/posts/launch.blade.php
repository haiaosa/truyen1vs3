@component('bulma.master')
    @slot('title')
        Truyen 1vs3
    @endslot
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/helpers.css">
	<link rel="stylesheet" href="/css/grid.css">
    <style type="text/css">
      	/* background */		
		.hero {
			background: black url(/images/hero-1.jpg) center / cover;
		}

		@media (max-width: 1024px) { .hero { background: black url(images/hero-2.jpg) center / cover; } }
		@media (max-width:  768px) { .hero { background: black url(images/hero-3.jpg) center / cover; } }

		/* responsive */
		@media (max-width: 768px) {
			:root {
				font-size: 90%;
			}
		}
    </style>

    <!-- .hero -->
	<section class="hero is-fullheight">

	<!-- .hero-head -->
	<nav class="hero-head">
		<div class="columns is-mobile is-marginless heading has-text-weight-bold">
			<div class="column left">
				<figure class="navbar-item image">
					<img src="/images/tesla.svg" style="width: 6.25rem; height: 1rem;">
				</figure>
			</div>
			<div class="column center desktop">
				<p class="navbar-item has-text-black">MODEL S </p>
				<p class="navbar-item has-text-black">MODEL X </p>
				<p class="navbar-item has-text-black">MODEL 3 </p>
				<p class="navbar-item has-text-white">ROADSTER</p>
				<p class="navbar-item has-text-black">ENERGY  </p>
			</div>
			<div class="column right">
				<p class="navbar-item desktop has-text-black desktop">SHOP   </p>
				<p class="navbar-item desktop has-text-black desktop">SIGN IN</p>
				<figure class="navbar-item image">
					<i class="fas fa-3x fa-bars has-text-black"
						style="width: 1rem; height: 1rem;"></i>
				</figure>
			</div>
		</div>
	</nav>
	<!-- /.hero-head -->

	<!-- .hero-body -->
	<header class="hero-body">
		<div class="is-overlay has-text-centered single-spaced" style="top: 92px;">
			<h2 class="subtitle is-4 has-text-weight-light has-text-black">Tesla</h2>
			<h1 class="title is-1 has-text-black">Roadster</h1>
		</div>
	</header>
	<!-- /.hero-body -->

	<!-- .hero-foot -->
	<main class="hero-foot center" style="padding: 2rem;">
		<div id="grid" style="width: 768px;">
			<div id="a" class="center-column">
				<p class="has-text-centered has-text-white">
					​The quickest car in the world, with record-setting<br>
					acceleration, range and performance.
				</p>
			</div>
			<div id="b" class="center-column">
				<p class="title has-text-white">
					<i class="fas fa-tachometer-alt has-text-grey-light"
						style="width: 0.75em; height: 0.75em;"></i>
					1.9<span class="is-size-5">s</span>
				</p>
				<p class="subtitle has-text-white is-7">0-60 mph</p>
			</div>
			<div id="c" class="center-column" style="border-left: 1px solid gray;">
				<p class="title has-text-white"><span class="is-size-5">+</span>250<span class="is-size-5">mph</span></p>
				<p class="subtitle is-7 has-text-white">Top Speed</p>
			</div>
			<div id="d" class="center-column" style="border-left: 1px solid gray;">
				<p class="title has-text-white">620</span><span class="is-size-5">mi</span></p>
				<p class="subtitle is-7 has-text-white">Mile Range</p>
			</div>
			<div id="e" class="center-column">
				<a class="button is-danger is-inverted is-rounded is-outlined has-text-weight-bold"
					style="width: 100%; border: 0.15em solid white;">
					Reserve Now
				</a>
			</div>
		</div>
	</main>
	<!-- /.hero-foot -->

	</section>
	<!-- /.hero -->

@endcomponent