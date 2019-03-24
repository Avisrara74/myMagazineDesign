<main class="mainShop">  
	<?php 
	// from func.php
		shopNav ();
	?>
	<?php
	// create array for href
		$navArray = array
		(
			1 => "Новые поступления", 
			"Платья", 
			"Верхняя одежда", 
			"Топы и свитера", 
			"Юбки и брюки", 
			"Аксессуары", 
			"Вещи со скидками", 
			"Подарочные сертификаты"
		);
	?>
	<div class="shop-items">
		<?php for ($i=1; $i <= 8; $i++) { 
			echo '<div class="shop-item increase"><a href="/index.php?page=' . $navArray[$i] . '"><img src="images/shop/' . $i . '.jpg" class="content-img" title="Новые поступления"></a></div>';
		} ?>
	</div>

	<?php 
	// from func.php
		bottomButtons ();
	?>
</main>
