<?php include_once('inc/header.php'); ?>

	<div class="mid-wrapper booking-payment-wrapper">
		<div class="steps">
			<span class="step step-1 done-step"><i><img src="images/check.png"></i> Select checkout</span>
			<span class="step step-2 active-step"><i>2</i> Bookings & payment</span>
			<span class="step step-3"><i>3</i> Review</span>
		</div>

		<div class="main-content-wrapper">
			<div id="billing-information">
				<div class="block-header"><a href="#" class="edit">Edit</a>Booking information</div>
				<form class="mr-form">
					<div class="text-box">
						<p>
							<label>First Name:</label>
							<input type="text" name="first-name">
						</p>
						<p>
							<label>Last Name:</label>
							<input type="text" name="last-name">
						</p>
						<p>
							<label>Email Address:</label>
							<input type="email" name="email">
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
							<?php include_once('inc/countries-select.php'); ?>
						</p>
						<p>
							<label>City:</label>
							<input class="mid-input" type="text" name="city">
							<label class="small-label">Zip:</label>
							<input class="small-input" type="text" name="zip">
						</p>
						<p>
							<label>Notes:</label>
							<textarea></textarea>
						</p>
						<p>
							<label>Guest Reference:</label>
							<input type="text" name="reference">
						</p>
					</div>
					<div class="text-box button-box">
						<button class="button right continue-edit" type="button">Continue</button>
					</div>
				</form>
			</div>

			<div id="payment-information">
				<div class="block-header">Payment information</div>
				<form class="mr-form">
					<div class="text-box">
						<div class="online-processors">
							<a class="op-item op-paypal" href="#">Pay with <img src="images/btn-paypal.png"></a>
							<a class="op-item op-applepay onlysafari" href="#">Pay with <img src="images/btn-apple-pay.png"></a>
							<div class="clearfix"></div>
						</div>
						<div class="cards" id="accepted-cards-images">

						</div>
						<p>
							<label>Credit Card Number:</label>
							<input type="text" name="credit-card" id="credit-card">
						</p>
						<p>
							<label>Name On Card:</label>
							<input type="text" name="card-name">
						</p>
						<div class="cc-exp-ver">
							<label>Expiration Date:</label>
							<select class="small-select" name="exp-month">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<select class="small-select" name="exp-day">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<label class="mid-label">Verification Code:</label>
							<input class="mid-input" type="text" name="verification-code">
							<div class="tooltip">
								<i class="qmark">?</i>
								<div class="tt-box">
									<h4>VISA, MasterCard and Discover:</h4>
									<p>Enter last 3 digits of the number printed on the back of your card (signature strip).</p>
									<h4>American Express:</h4>
									<p>Enter the 4 digits printed to the right (sometimes left) on the front of your card.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-box button-box">
						<button class="button right continue-edit" type="button">Continue</button>
					</div>
				</form>
			</div>

			<form class="mr-form">
				<div class="text-box borderless">
					<p class="promo promo-question" data-control="enter-promo">Do you have a promo code?</p>
					<p class="promo enter-promo"><label>Your promo code</label> <input class="promo-input" type="text" name="promo-code"> <button class="button submit-promo" type="button">Save</button></p>
					<p class="promo your-promo"><label>Your promo code</label> <input class="promo-code" type="text"> <span class="remove-item"></span></p>
					<p class="promo promo-question" data-control="change-guest-name">Guest name different than billing name?</p>
					<p class="promo guest-promo">Guest name changed to "<b><span class="first-guest-name"></span> <span class="last-guest-name"></span></b>". <a href="#" class="change-name">Change guest name?</a></p>
				</div>
				<div class="change-guest-name">
					<p>
						<label>First name</label>
						<input type="text" name="first-name" class="change-first-name">
					</p>
					<p>
						<label>Last name</label>
						<input type="text" name="last-name" class="change-last-name">
					</p>
					<button class="button right apply-name-change" type="button">Save</button>
				</div>
			</form>
		</div>

		<div class="sidebarbox-wrapper">
			<div class="cart-sidebar">
				<div class="block-header"><a href="#" class="edit">Edit</a>You selected</div>
				<div class="mini-products">
					<div class="review-products">
						<div class="mini-product">
							<div class="product-image mini-image">
								<img src="images/demo/room.png">
							</div>
							<div class="product-data mini-data">
								<button class="remove-item right" type="button"></button>
								<h4 class="product-title mini-title">Superior double double</h4>
								<p class="product-subtitle mini-subtitle">3 nights, 4 adults, aiport pickut (4 persons)</p>
								<div class="product-costs mini-costs">
									<p>Per night / <span class="product-price mini-price">$158.08</span></p>
									<p>Total / <span class="product-price mini-price">$473.23</span></p>
								</div>
							</div>
						</div>
						<div class="mini-product">
							<div class="product-image mini-image">
								<img src="images/demo/room.png">
							</div>
							<div class="product-data mini-data">
								<button class="remove-item right" type="button"></button>
								<h4 class="product-title mini-title">Superior double</h4>
								<p class="product-subtitle mini-subtitle">3 nights, 4 adults, aiport pickut (4 persons)</p>
								<div class="product-costs mini-costs">
									<p>Per night / <span class="product-price mini-price">$158.08</span></p>
									<p>Total / <span class="product-price mini-price">$473.23</span></p>
								</div>
							</div>
						</div>
						<div class="mini-product">
							<div class="product-image mini-image">
								<img src="images/demo/room.png">
							</div>
							<div class="product-data mini-data">
								<button class="remove-item right" type="button"></button>
								<h4 class="product-title mini-title">Junior double double</h4>
								<p class="product-subtitle mini-subtitle">3 nights, 4 adults, aiport pickut (4 persons)</p>
								<div class="product-costs mini-costs">
									<p>Per night / <span class="product-price mini-price">$158.08</span></p>
									<p>Total / <span class="product-price mini-price">$473.23</span></p>
								</div>
							</div>
						</div>
					</div>
					<div class="product-totals mini-totals">
						<p class="product-total mini-total">Room charges <span class="product-cost mini-cost">$1,419.69</span></p>
						<p class="product-total mini-total savings">Total savings <span class="product-cost mini-cost">-$223.75</span></p>
						<p class="product-total mini-total">Occupancy tax <span class="product-cost mini-cost">$18.30</span></p>
						<p class="product-total mini-total">Tax <span class="product-cost mini-cost">$124.35</span></p>
						<p class="product-total mini-total grand-total">Total <span class="product-cost mini-cost">$1,338.59</span></p>
					</div>
					<div class="product-buttons mini-buttons">
						<button type="button" class="button checkout" type="button">Back to Checkout</button>
						<button type="button" class="button button-grey" type="button">Book more rooms</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('inc/footer.php'); ?>
