<main class="mainShop">
	<?php 
		shopNav ();
	?>
	<?php 
		// get content we need from func.php
		$nav = $_GET['page'];
		if ($nav == 'Платья' || $nav == 'Верхняя одежда') {
			$navProductItem = GET_navMoreProductItems ($nav);
		} elseif ($nav == 'Новые поступления') {
			$navProductItem = GET_navNewProductItems ();
		} else {			
			$navProductItem = GET_navSomeProductItems ($nav);
		}
	?>
	<h2 class="afterNavProduct"><?php echo $nav; ?></h2>
	<div class="navProduct">
		<?php foreach ($navProductItem as $navProductItems): ?>
			<div class="navProductItem">
				<div class="lowIncrease"><a href="/index.php?page=<?php echo $navProductItems['id']; ?>"><img src="<?php echo $navProductItems['image_way'] ?>" class="content-img" alt="sss"></a></div>
				<p><a href="#"><?php echo $navProductItems['title'] ?></a></p>
				<p><?php echo $navProductItems['price'] ?>.00p.</p>
			</div>
		<?php endforeach; ?>
	</div>

	<?php 
		bottomButtons ();
	?>
</main>