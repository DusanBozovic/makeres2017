<div id="mini-cart">
	<p class="mini-cart-title">You selected</p>

	<div class="mini-cart-products">

		<div class="mini-product">
			<div class="product-image mini-image">
				<img src="images/demo/room-mini.jpg">
			</div>
			<div class="product-data mini-data">
				<button class="remove-item right"></button>
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
				<img src="images/demo/room-mini.jpg">
			</div>
			<div class="product-data mini-data">
				<button class="remove-item right"></button>
				<h4 class="product-title mini-title">Superior double double</h4>
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
				<img src="images/demo/room-mini.jpg">
			</div>
			<div class="product-data mini-data">
				<button class="remove-item right"></button>
				<h4 class="product-title mini-title">Superior double double</h4>
				<p class="product-subtitle mini-subtitle">3 nights, 4 adults</p>
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
		<p class="product-total mini-total grand-total-mini">Total <span class="product-cost mini-cost">$1338.59</span></p>
	</div>

	<div class="product-buttons mini-buttons">
	<?php if ( $_GET['four_options'] ) : ?>
		<div class="additional-checkout-options">
			<a href="#" class="apple-checkout right"><img src="images/checkout-apple-pay.png"></a>
			<a href="#" class="paypal-checkout"><img src="images/checkout-paypal.png"></a>
		</div>
		<div class="multipe-options">
			<button type="button" class="button checkout button-right">Checkout</button>
			<button type="button" class="button checkout button-right">Log In & Checkout</button>
			<button type="button" class="button button-grey fw book-more">Book more rooms</button>
		</div>
	<?php else : ?>
		<button type="button" class="button checkout">Checkout</button>
		<button type="button" class="button button-grey book-more">Book more rooms</button>
	<?php endif; ?>
	</div>

</div>
