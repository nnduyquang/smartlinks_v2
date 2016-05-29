<section class="cd-hero">
	<ul class="cd-hero-slider autoplay">
		<li class="selected">
			<div class="cd-full-width">
				<h2>Hero slider</h2>
				<p>A simple, responsive slideshow in CSS &amp; jQuery.</p>
				<a href="http://codyhouse.co/?p=675" class="cd-btn">Article &amp; Download</a>
			</div> <!-- .cd-full-width -->
		</li>

		<li>
			<div class="cd-half-width">
				<h2>Slide title here</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
				<a href="#0" class="cd-btn">Start</a>
				<a href="#0" class="cd-btn secondary">Learn More</a>
			</div> <!-- .cd-half-width -->

			<div class="cd-half-width cd-img-container">
				{!! HTML::image('resources/assets/slider/tech-1.jpg') !!}
			</div> <!-- .cd-half-width.cd-img-container -->
		</li>

		<li>
			<div class="cd-half-width cd-img-container">
				{!! HTML::image('resources/assets/slider/tech-2.jpg') !!}
			</div> <!-- .cd-half-width.cd-img-container -->

			<div class="cd-half-width">
				<h2>Slide title here</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
				<a href="#0" class="cd-btn">Start</a>
				<a href="#0" class="cd-btn secondary">Learn More</a>
			</div> <!-- .cd-half-width -->
			
		</li>

		<li class="cd-bg-video">
			<div class="cd-full-width">
				<h2>Slide title here</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
				<a href="#0" class="cd-btn">Learn more</a>
			</div> <!-- .cd-full-width -->
			<div class="cd-bg-video-wrapper" data-video="{{ URL::asset('resources/assets/slider/video/video') }}">
				<!-- video element will be loaded using jQuery -->
			</div> <!-- .cd-bg-video-wrapper -->
		</li>

		<li>
			<div class="cd-full-width">
				<h2>Slide title here</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, explicabo.</p>
				<a href="#0" class="cd-btn">Start</a>
				<a href="#0" class="cd-btn secondary">Learn More</a>
			</div> <!-- .cd-full-width -->
		</li>
	</ul> <!-- .cd-hero-slider -->

	<div class="cd-slider-nav">
		<nav>
			<span class="cd-marker item-1"></span>
			
			<ul>
				<li class="selected"><a href="#0">Intro</a></li>
				<li><a href="#0">Tech 1</a></li>
				<li><a href="#0">Tech 2</a></li>
				<li><a href="#0">Video</a></li>
				<li><a href="#0">Image</a></li>
			</ul>
		</nav> 
	</div> <!-- .cd-slider-nav -->
</section> <!-- .cd-hero -->