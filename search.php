<?php 
	if (isset($_POST['shopSearch'])) {
		$_SESSION['search'] = $_POST['shopSearch'];
	}
	$searchProductItems = GET_searchProductItems ();
	if (empty($searchProductItems)) {
		$_SESSION['search'] = 'Ничего не найдено. Может вас заинтересуют эти товары';
		$searchProductItems = GET_navNewProductItems ();
		shuffle($searchProductItems);
	}
?>

<main class="mainShop"> 
	<?php 
	// from func.php
		shopNav ();
	?>

	<h2 class="afterNavProduct"><?php echo $_SESSION['search']; ?></h2>
	<div class="navProduct">
		<?php foreach ($searchProductItems as $searchProductItem): ?>
			<div class="navProductItem">
				<div class="lowIncrease"><a href="/index.php?page=<?php echo $searchProductItem['id']; ?>"><img src="<?php echo $searchProductItem['image_way'] ?>" class="content-img" alt="sss"></a></div>
				<p><a href="#"><?php echo $searchProductItem['title'] ?></a></p>
				<p><?php echo $searchProductItem['price'] ?>.00p.</p>
			</div>
		<?php endforeach; ?>
	</div>

	
	<?php 
	// from func.php
		bottomButtons ();
	?>
</main>