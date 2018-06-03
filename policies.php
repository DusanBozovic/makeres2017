<?php $header = true; include_once('inc/header.php'); ?>

			<?php include_once('inc/calendar.php'); ?>

			<div class="container">
				<div class="availability-info-mobile">
					<?php include('inc/availability.php'); ?>
				</div>

				<div class="main-content-wrapper">
					<div id="tabs">
						<ul>
							<li><a href="#tabs-1"><span class="view">View</span> Rooms</a></li>
							<li><a href="#tabs-2"><span class="view">View</span> packages</a></li>
						</ul>

						<div id="tabs-1" class="rooms">
							<?php include_once('inc/content.php'); ?>
						</div>
						<div id="tabs-2" class="packages">
							<div id="accordion">
								<h3>Bed, Breakfast &amp; Beyond <span>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam.</span></h3>
								<div>
									<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
								</div>
								<h3>All Wheel Drive <span>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam.</span></h3>
								<div>
									<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.</p>
									<div class="rooms-list packages-rooms-list">
										<?php include('inc/content-grouped/room1.php'); ?>
										<?php include('inc/content-grouped/room1.php'); ?>
									</div>
								</div>
								<h3>Empire package <span>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam.</span></h3>
								<div>
									<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sidebarbox-wrapper">
					<aside>
						<?php include_once('inc/carousel.php'); ?>

						<?php include('inc/availability.php'); ?>
					</aside>
				</div>

				<?php include_once('inc/description.php'); ?>
			</div>
<?php include_once('inc/footer.php'); ?>
