<?php include_once('inc/header.php'); ?>

	<div class="mid-wrapper booking-payment-wrapper">
		<div class="steps">
			<span class="step step-1 active-step"><i>1</i> Select checkout</span>
			<span class="step step-2"><i>2</i> Bookings & payment</span>
			<span class="step step-3"><i>3</i> Review</span>
		</div>

		<div class="main-content-wrapper step-one-checkout">
			<h3 class="desired-checkout">How would you like to check out today?</h3>
			<div class="guest-checkout">
				<h4>GUEST CHECKOUT</h4>
				<p>Don’t want to sign up? No problem! Check out as guest.</p>
				<div class="button-box">
					<button class="button right continue-edit" type="button">GUEST CHECKOUT</button>
				</div>
			</div>
			<div class="sign-up-or-login">
				<h4>SIGN UP OR <a class="sign-in-popup" href="javascript:void(0);">LOG IN</a></h4>
				<form class="mr-form">
					<div>
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
							<label>Password:</label>
							<input type="password" name="password">
						</p>
					</div>
					<div class="button-box">
						<button class="button right continue-edit" type="button">SIGN UP & CHECKOUT</button>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>

			<!-- MOBILE STEP 1 -->

			<div class="guest-checkout-m">
				<div id="accordion2">
					<h4>GUEST CHECKOUT<span class="panel-icon">-</span></h4>
					<div>
						<p>Don’t want to sign up? No problem! Check out as guest.</p>
						<div class="button-box">
							<button class="button right continue-edit" type="button">GUEST CHECKOUT</button>
						</div>
					</div>
				</div>
			</div>
			<div class="sign-up-or-login-m">
				<div id="accordion3">
					<h4>SIGN UP OR <a class="sign-in-popup" href="javascript:void(0);">LOG IN</a> & CHECKOUT<span class="panel-icon">+</span></h4>
					<div>
						<form class="mr-form">
							<div>
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
									<label>Password:</label>
									<input type="password" name="password">
								</p>
							</div>
							<div class="button-box">
								<button class="button right continue-edit" type="button">SIGN UP & CHECKOUT</button>
							</div>
						</form>
					</div>
				</div>
			</div>
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
								<p class="product-subtitle mini-subtitle">
									<span class="nnp">2 nights , 2 adults 2 children</span>
									<span class="addon-mini addon-ac-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/addon.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
									<span class="addon-mini addon-wifi-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/wifi-2.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
									<span class="addon-mini addon-parking-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/p.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
									<span class="addon-mini addon-food-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/food.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
									<span class="addon-mini addon-airport-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/airport.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
								</p>
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
								<p class="product-subtitle mini-subtitle">
									<span class="nnp">2 nights , 2 adults 2 children</span>
									<span class="addon-mini addon-wifi-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/wifi-2.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
									<span class="addon-mini addon-airport-mini addon-mini-show">
										<img src="http://empirehotelnyc.com/mr6/images/icons/airport.png">
										<span class="addon-mini-times">x</span><span class="addon-mini-ammount">3</span><span class="addon-mini-price">$135</span>
									</span>
								</p>
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
								<p class="product-subtitle mini-subtitle">
									<span class="nnp">2 nights , 2 adults 2 children</span>
								</p>
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
						<p class="product-total mini-total">Add-on charges <span class="product-cost mini-cost">$300.00</span></p>
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
