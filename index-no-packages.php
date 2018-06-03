<?php $header = true; include_once('inc/header.php'); ?>

			<?php include_once('inc/calendar.php'); ?>

			<div class="container">
				<div class="availability-info-mobile">
					<?php include('inc/availability.php'); ?>
				</div>

				<div class="main-content-wrapper">
					<?php include_once('inc/content.php'); ?>
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
