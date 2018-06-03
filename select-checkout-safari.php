<?php include_once('inc/header.php'); ?>

	<div class="mid-wrapper select-checkout-wrapper select-checkout-wrapper-safari">
		<div class="steps">
			<span class="step step-1 active-step"><i>1</i> Select checkout</span>
			<span class="step step-2"><i>2</i> Bookings & payment</span>
			<span class="step step-3"><i>3</i> Review</span>
		</div>

		<h3 class="desired-checkout">How would you like to check out today?</h3>

		<div class="checkout-options">
			<div class="checkout-option">
				<a href="#" class="sign-up">Join Now</a>
				<h3 class="checkout-option-title">Log In:</h3>
				<form class="mr-form">
					<p>
						<label>Email Address:</label>
						<input type="email" name="email">
					</p>
					<p>
						<label>Password:</label>
						<input type="password" name="password">
					</p>
					<a href="#" class="forgot">Forgot password?</a>
					<button type="button" class="button">Log In</button>
				</form>
			</div>
			<div class="checkout-option">
				<h3 class="checkout-option-title">Guest Checkout?</h3>
				<p>Don’t want to join now? No problem! Select to check out as guest.</p>
				<button type="button" class="button">Guest Checkout</button>
			</div>
			<div class="checkout-option">
				<div class="checkout-icon">
					<img src="images/paypal.png">
				</div>
				<p>Make your payment with PayPal’s secure services.</p>
				<button type="button" class="button">Paypal Checkout</button>
			</div>
			<div class="checkout-option">
				<div class="checkout-icon">
					<img src="images/apple-pay.png">
				</div>
				<p>Our website now supports ApplePay. Make your payment simple with ApplePay.</p>
				<button type="button" class="button">Apple Pay Checkout</button>
			</div>
		</div>
	</div>

<?php include_once('inc/footer.php'); ?>
