<!DOCTYPE html>
<html>
<head>
	<title>Make Reservations</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Safari iOS - apps only -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!-- Chrome for Android - NEW! -->
	<meta name="mobile-web-app-capable" content="no">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-responsive.css">

	<script src="js/modernizr-custom.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body>

<div class="main-framework">

	<div class="framework-wrapper">

		<!-- Header -->
		<div class="header-wrapper">
			<header>
				<div class="block-left">
					<div class="header-logo">
						<a href="index.php" title="Make reservations"><img src="images/logo@2x.png" alt=""></a>
					</div>
					<div class="header-contact">
						<span class="contact-name">The Empire Hotel</span>
						<span class="contact-address"><a href="/contact">44 West 63rd Street New York, NY 10023</a></span>
						<span class="contact-phone">Tel: <a href="tel: 212.265.7400">212.265.7400</a></span>
						<span class="contact-fax">Fax: 212.265.7401</span>
					</div>
				</div>
				<?php if ( $header ) : ?>
				<div class="block-right">
					<div class="header-language">
						<nav class="menu" role="navigation">
							<label class="language-text">Language:</label>
							<ul id="menu-languages-menu">
								<li class="active"><a href="#">English</a></li>
								<li><a href="#">Française</a></li>
								<li><a href="#">Español</a></li>
								<li><a href="#">Deutsch</a></li>
								<li><a href="#">Italiano</a></li>
								<li><a href="#">日本語</a></li>
								<li><a href="#">中文</a></li>
							</ul>
						</nav>
						<div class="menu small-language-wrapper right">
							<label>Language:</label>
							<ul id="menu-responsive-languages-menu">
								<li class="active"><a href="#">EN</a></li>
								<li><a href="#">FR</a></li>
								<li><a href="#">ES</a></li>
								<li><a href="#">DE</a></li>
								<li><a href="#">IT</a></li>
								<li><a href="#">CN</a></li>
								<li><a href="#">JP</a></li>
							</ul>
							<span class="toggler"></span>
						</div>
					</div>
					<div class="header-search-form">
						<div class="section-button section-user">
						<?php if ( $_GET['singed_in'] ) : ?>
							<p>Hi john, <span class="user-links"><a href="#" class="edit-info">Edit info</a> <b>|</b> <a href="#" class="sign-out">Sign out</a></span> <span class="switch"></span></p>

							<?php include_once('inc/edit-account.php'); ?>
						<?php else : ?>
							<a href="#" class="sign-in-popup">Log in</a>

							
						<?php endif; ?>
						</div>
						<div class="section-button section-cart">
							<i>3</i>
							<a href="#">
								<img src="images/cart@4x.png">
							</a>
							<p class="price">$1544.04</p>

							<?php include_once('inc/mini-cart.php'); ?>
						</div>
						<div class="section-button section-book-now">
							<a href="#">
								<button type="button" class="button">Checkout</button>
							</a>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php include_once('inc/sign-in.php'); ?>
				<?php include_once('inc/sign-up.php'); ?>
				<?php include_once('inc/reset-password.php'); ?>
				<?php include_once('inc/complete-profile.php'); ?>
			</header>
		</div><!-- End of Header -->

		<!-- Middle -->
		<div class="main-wrapper">
