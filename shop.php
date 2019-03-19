<main class="mainShop">  
	<?php 
		shopNav ();
	?>

	<div class="shop-items">
		<?php for ($i=1; $i <= 8; $i++) { 
			echo '<div class="shop-item increase"><a href="#"><img src="images/shop/' . $i . '.jpg" class="content-img" title="Новые поступления"></a></div>';
		} ?>
	</div>

	<?php 
		bottomButtons ();
	?>
</main>
