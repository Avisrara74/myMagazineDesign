<?php 
	$products = GET_mainProducts ();
?>
<main class="mainIndex">
	<?php 
		for ($i=0; $i <= 8; $i++) { 
			echo 
			'<div class="grid-item">
				<a href="/index.php?page=' . $products[$i]['id'] . '"><img src="' . $products[$i]['image_way'] . '" 
				class="content-img" alt="Изображение"></a>
			</div>';
		} 
	?>
</main>
