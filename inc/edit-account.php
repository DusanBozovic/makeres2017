<div id="edit-account" class="popup-form-wrapper">
	<div class="sign-container">
		<div class="block-header">
			<div class="close-sign-pop"><img src="images/close@2x.png"></div>
			<span>Edit your account information</span>
		</div>
		<form class="mr-form">
			<p>
				<label>Email:</label>
				<input type="text" name="email" value="john@email.com">
			</p>
			<p>
				<label>Old Password:</label>
				<input type="password" name="old-password" value="">
			</p>
			<p>
				<label>New Password:</label>
				<input type="password" name="new-password" value="">
			</p>
			<p>
				<label>Confirm New Password:</label>
				<input type="password" name="new-password" value="">
			</p>
			<p>
				<label>First name:</label>
				<input type="text" name="first-name" value="John">
			</p>
			<p>
				<label>Last name:</label>
				<input type="text" name="last-name" value="Doe">
			</p>
			<p>
				<label>Phone:</label>
				<input type="tel" name="phone" value="555-592-9384">
			</p>
			<p>
				<label>Address:</label>
				<input type="text" name="address" value="888 7th Avenue">
			</p>
			<p>
				<label>Country:</label>
				<?php include_once('countries-select.php'); ?>
			</p>
			<p>
				<label>City:</label>
				<input class="mid-input" type="text" name="city" value="New York">
				<label class="small-label">Zip:</label>
				<input class="small-input" type="text" name="zip" value="10106">
			</p>
			<div class="section-buttons">
				<button href="#" class="button right update-info" type="button">Save</button>
			</div>
		</form>
	</div>
</div>
