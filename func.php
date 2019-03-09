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
	} elseif ($page == '1') {
		require('openProduct.php');
	} elseif ($page == '2') {
		require('openProduct.php');
	} elseif ($page == '3') {
		require('openProduct.php');
	} elseif ($page == '4') {
		require('openProduct.php');
	} elseif ($page == '5') {
		require('openProduct.php');
	} elseif ($page == '6') {
		require('openProduct.php');
	} elseif ($page == '7') {
		require('openProduct.php');
	} elseif ($page == '8') {
		require('openProduct.php');
	} elseif ($page == '9') {
		require('openProduct.php');
	} elseif ($page == '10') {
		require('openProduct.php');
	} elseif ($page == '11') {
		require('openProduct.php');
	} elseif ($page == '12') {
		require('openProduct.php');
	} elseif ($page == '13') {
		require('openProduct.php');
	} elseif ($page == '14') {
		require('openProduct.php');
	} elseif ($page == '15') {
		require('openProduct.php');
	} elseif ($page == '16') {
		require('openProduct.php');
	} elseif ($page == '17') {
		require('openProduct.php');
	}

	// удобночитаемый дамп
	function vardump($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}

	// Выводим последние добавленные на товары(новые поступления)
	function GET_navNewProductItems () {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price 
			FROM products
			INNER JOIN images ON images.id_product = products.id GROUP BY images.id_product DESC LIMIT 2, 10";
		$result = mysqli_query($connection, $sql);
		$navNewProductItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $navNewProductItems;
	}

	function GET_openProducts ($product_id) {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price, XS, S, M, L, XL, XXL 
			FROM products
			INNER JOIN images ON images.id_product = products.id WHERE '$product_id' = products.id";
		$result = mysqli_query($connection, $sql);
		$openProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $openProducts;
	}

	function GET_mainProducts () {
		global $connection;
		$sql = "SELECT products.id, images.image_way 
			FROM products
			INNER JOIN images ON images.id_product = products.id GROUP BY products.id LIMIT 9";
		$result = mysqli_query($connection, $sql);
		$openProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $openProducts;
	}
?>