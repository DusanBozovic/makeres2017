<div id="sign-up" class="popup-form-wrapper">
	<div class="sign-container">
		<div class="block-header">
			<div class="close-sign-pop"><img src="images/close@2x.png"></div>
			<span>Create your account</span>
		</div>
		<form class="mr-form">
			<p>
				<label>Email:</label>
				<input type="text" name="email">
			</p>
			<p>
				<label>Password:</label>
				<input type="password" name="password">
			</p>
			<p>
				<label>First name:</label>
				<input type="text" name="first-name">
			</p>
			<p>
				<label>Last name:</label>
				<input type="text" name="last-name">
			</p>
			<p>
				<label>Phone:</label>
				<input type="tel" name="phone">
			</p>
			<p>
				<label>Address:</label>
				<input type="text" name="address">
			</p>
			<p>
				<label>Country:</label>
				<?php include_once('countries-select.php'); ?>
			</p>
			<p>
				<label>City:</label>
				<input class="mid-input" type="text" name="city">
				<label class="small-label">Zip:</label>
				<input class="small-input" type="text" name="zip">
			</p>
			<p class="info-message">By creating your account, you agree to make-reservations.com <a href="javascript:void(0);" class="show-privacy-policy-pu">Privacy Policy</a> and <a class="show-terms-and-conditions-pu" href="javascript:void(0);">Terms of Use</a>.</p>
			<div class="section-buttons">
				<button href="#" class="button right sign-up" type="button">Join Now</button>
				<button href="#" class="button button-grey sign-in" type="button">Log in</button>
			</div>
		</form>
	</div>
</div>
