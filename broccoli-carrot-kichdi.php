<?php include "header.php" ?>
<script>
function showDropDown(){
	console.log("Clicked mini meal");
	document.getElementById("mini_meal_dropdown").classList.toggle("show");
	}

function hideDropDown(){
	console.log("Clicked mini meal");
	document.getElementById("mini_meal_dropdown").style.display ='none';
	}
</script> 
<div class="ask">
	<div class="container">
		<ul class="products-menu">
			<li>Meal</li>
			<li onclick= "showDropDown()">Mini Meal</li>
		</ul>
	</div>
</div>
<div class="ask-sub">
	<div class="container" id="mini_meal_dropdown" style="display:none;">
		<ul class="products-submenu">
			<li>Apple Purée</li>
			<li>Carrot & Red Pepper Purée</li>
			<li>Mango & Sweet Potato Purée</li>
			<li>Spinach & Pumpkin Soup</li>
			<li>Pumpkin Red Lentil Purée</li>
		</ul>
	</div>
</div>

<div class="product-description">
	<div class="container">
		<div class="col-sm-6 col-xs-12">
			<h3>Broccoli & Carrot Kichdi</h3>
			<ul class="product-content">
				<li>215g</li>
				<li>Coarse</li>
				<li>Meal</li>
			</ul>
			<p>Traditional khichdi with a healthy twist – powered with
			the goodness of broccoli, peas and carrots and flavoured
			by aromatic spices, this makes for a wholesome, nutritious
			meal for your child.</p>
			<button type="button" class="btn btn-primary">Buy now</button>
			<p class="operation">We are only operating in Bengaluru at this moment.</p>
			<div class="col-xs-12 col-sm-12">
				<div class="almonds">
					<div class="col-sm-3">
						<img src="img/ingredients.png" class="almonds-image">
					</div>
					<div class="col-sm-9">
						<div class="almonds-text">
							<h4>Ingredients</h4>
							<p>Broccoli, Carrots, Green Peas, Rice, Moong
							Dal, Drumstick, Onion, Ginger, Garlic,
							Almonds, Ghee, Turmeric, Spice mix, Water</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xs-12">
				<div class="almonds">
					<div class="col-sm-3">
						<img src="img/taste.png" class="almonds-image">
					</div>
					<div class="col-sm-9">
						<div class="almonds-text">
							<h4>Taste</h4>
							<p>This khichdi has the distinct flavour of
							broccoli with a hint of sweetness from
							carrots and peas.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="almonds">
					<div class="col-sm-3">
						<img src="img/happi-ingredients.png" class="almonds-image">
					</div>
					<div class="col-sm-9">
						<div class="almonds-text">
							<h4>Happi Ingredients</h4>
							<p>Almonds contain good fat, Omega-3 which
							is essential for brain development, while
							drumstick packs in Vitamin C and protein.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xs-12">
				<div class="almonds">
					<div class="col-sm-3">
						<img src="img/herbs.png" class="almonds-image">
					</div>
					<div class="col-sm-9">
						<div class="almonds-text">
							<h4>Herbs & Spices</h4>
							<p>The specially developed home-made
							Garam Masala for babies gives this dish the
							aroma from your own kitchen!</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-sm-6 col-xs-12">
				<div class="happibo-jar">
					<img src="img/happibo-jar.png" class="happibo-container">
				</div>
				<div class="nutrition-table">
				  <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Nutritional Facts*</th>
				        <th>Per Serving 215g</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Energy (kcal)</td>
				        <td>101.4</td>
				      </tr>
				      <tr>
				        <td>Protein (g)</td>
				        <td>3.4</td>
				      </tr>
				      <tr>
				        <td>Total Carbohydrate (g)</td>
				        <td>12.5</td>
				      </tr>
				      <tr>
				        <td>Natural Sugars (g)</td>
				        <td>9.1</td>
				      </tr>
				      <tr>
				        <td>Added Sugar (g)</td>
				        <td>0.0</td>
				      </tr>
				      <tr>
				        <td>Dietary Fibre (g)</td>
				        <td>3.4</td>
				      </tr>
				      <tr>
				        <td>Total Fat</td>
				        <td>4.8</td>
				      </tr>
				      <tr>
				        <td>Saturated Fatty Acids (g)</td>
				        <td>3.4</td>
				      </tr>
				      <tr>
				        <td>Monosaturated Fatty Acids (g)</td>
				        <td>2.6</td>
				      </tr>
				      <tr>
				        <td>Polyunsaturated Fatty Acids (g)</td>
				        <td>0.9</td>
				      </tr>
				      <tr>
				        <td>Trans Fatty Acids (g)</td>
				        <td>0.5</td>
				      </tr>
				      <tr>
				        <td>Cholesterol (mg)</td>
				        <td>0.0</td>
				      </tr>
				      <tr>
				        <td>*Approximate Values</td>
				      </tr>
				    </tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>

	<div class="benefits">
		<div class="container">
			<div class="col-xs-12 col-sm-12">
				<h3>Added Benefits</h3>
				<h4>Per Serving 215g</h4>
			</div>
			<div class="col-xs-12 col-sm-12">
				<div class="minerals">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<h3>Potassium</h3>
							<div class="mineral-content">
								<h3>176</h3>
								<p>mg</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<h3>Magnesium</h3>
							<div class="mineral-content">
								<h3>30</h3>
								<p>mg</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<h3>Vitamin C</h3>
							<div class="mineral-content">
								<h3>12.9</h3>
								<p>mg</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="know-meal">
		<img src="img/know-meal.png" class="meal-tag" />
	</div>
</div>

<div class="ask">
	<div class="container">
		<div class="col-xs-12 col-sm-12">
			<div class="tips">
				<img src="img/tips.png" class="happy-tips">
			</div>
			<p>HappiMom tip: Warm up with a dollop of ghee and season to your<br/>
			child’s liking before serving.</p>
		</div>
	</div>
</div>



<?php include "footer.php" ?>