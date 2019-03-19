<main class="mainShop"> 
	<?php 
		shopNav ();
	?>

	<?php 
		if (isset($_POST['shopSearch'])) {
			$_SESSION['search'] = $_POST['shopSearch'];
		}
		$searchProductItems = GET_searchProductItems ();
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
		bottomButtons ();
	?>
</main>