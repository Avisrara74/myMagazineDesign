<?php 
	$products = GET_mainProducts ();
?>
<main class="mainIndex">
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[0]['id']; ?>"><img src="<?php echo $products[0]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[1]['id']; ?>"><img src="<?php echo $products[1]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[2]['id']; ?>"><img src="<?php echo $products[2]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[3]['id']; ?>"><img src="<?php echo $products[3]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[4]['id']; ?>"><img src="<?php echo $products[4]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[5]['id']; ?>"><img src="<?php echo $products[5]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[6]['id']; ?>"><img src="<?php echo $products[6]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[7]['id']; ?>"><img src="<?php echo $products[7]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
	<div class="grid-item"><a href="/index.php?page=<?php echo $products[8]['id']; ?>"><img src="<?php echo $products[8]['image_way']; ?>" class="content-img" alt="Изображение"></a></div>
</main>
