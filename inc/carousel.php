<div class="carousel">
	<div id="slider" class="flexslider">
		<ul class="slides">
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
		</ul>
	</div>
	<div id="carousel" class="flexslider">
		<ul class="slides">
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide1.jpg">
				<img src="images/demo/slider/slide1.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide2.jpg">
				<img src="images/demo/slider/slide2.jpg" />
			</li>
			<li data-thumb="images/demo/slider/slide3.jpg">
				<img src="images/demo/slider/slide3.jpg" />
			</li>
		</ul>
	</div>
	<script>
		jQuery(window).load(function() {
			jQuery('#carousel').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: true,
				slideshowSpeed: 4000,
				animationLoop: true,
				itemWidth: 97,
				itemMargin: 15,
				asNavFor: '#slider'
			});
			jQuery('#slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: true,
				slideshowSpeed: 4000,
				animationLoop: true,
				sync: "#carousel"
			});
		});
	</script>
</div>
