<script>
function miniMealShowDropDown(){

	$("#mini_meal_dropdown").toggle("show");
	$("#meal_dropdown").hide();
       
	}

function mealShowDropDown(){
	$("#meal_dropdown").toggle("show");
	$("#mini_meal_dropdown").hide();


	}
	

	
</script> 
<div class="ask">
	<div class="container">
		<ul class="products-menu">
			<li onclick= "mealShowDropDown()" style="cursor:pointer;">Meal</li>
			<li onclick= "miniMealShowDropDown()" style="cursor:pointer;">Mini Meal</li>
		</ul>
	</div>
</div>
<div class="ask-sub">
	<div class="container" id="mini_meal_dropdown" style="display:none;">
		<ul class="products-submenu">
			<li><a href="/apple-puree.php">Apple Purée</a></li>
			<li><a href="/carrot-red-pepper-puree.php">Carrot & Red Pepper Purée</a></li>
			<li><a href="/mango-sweet-potato-puree.php">Mango & Sweet Potato Purée</a></li>
			<li><a href="/spinach-pumpkin-soup.php">Spinach & Pumpkin Soup</a></li>
			<li><a href="/pumpkin-red-lentil-puree.php">Pumpkin Red Lentil Purée</a></li>
		</ul>
	</div>
	<div class="container" id="meal_dropdown" style="display:none;">
		<ul class="products-submenu">
			<li><a href="/ragi-pasta-pepper-sauce.php">Ragi Pasta In Red Pepper Sauce</a></li>
			<li><a href="/broccoli-carrot-khichdi.php">Broccoli & Carrot Khichadi</a></li>
		</ul>
	</div>	
</div>