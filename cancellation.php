<?php include_once('inc/header.php'); ?>

	<div class="mid-wrapper cancellation-wrapper">
		<div class="block-header">Booking cancellation</div>
		<form class="mr-form">
			<p class="form-subtitle">Please provide us with the following information so that we can cancel your booking.</p>
			<p>
				<label>Confirmation number</label>
				<input type="text" name="confirmation">
			</p>
			<p>
				<label>Email</label>
				<input type="text" name="email">
			</p>
			<p>
				<label>Cancellation reason</label>
				<textarea name="reason"></textarea>
			</p>
			<p class="warning hidden">Cancellation reason must be at least 10 characters long.</p>
			<div class="section-buttons">
				<button href="#" class="button cancellation-button right" type="button">Cancel booking</button>
			</div>
		</form>
	</div>

<?php include_once('inc/footer.php'); ?>
