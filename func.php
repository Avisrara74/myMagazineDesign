<?php 
	$page = $_GET['page'];
	if (!isset($page)) {
		require('main.php');
	} elseif ($page == 'shop') {
		require('shop.php');
	} elseif ($page == 'delivery') {
		require('delivery.php');
	} elseif ($page == 'contact') {
		require('contact.php');
	} elseif ($page == 'openProduct') {
		require('openProduct.php');
	} elseif ($page == 'navProduct') {
		require('navProduct.php');
	} elseif ($page == 'newProducts') {
		require('navNewProducts.php');
	}


	// Выводим последние добавленные на товары(новые поступления)
	function GET_navNewProductItems () {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price 
			FROM products
			INNER JOIN images ON images.id_product = products.id GROUP BY images.id_product DESC LIMIT 2, 10";
		$result = mysqli_query($connection, $sql);
		$navProductItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $navProductItems;
	}
?>