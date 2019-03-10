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

	} elseif ($page == 'Новые поступления') {
		require('navProduct.php');
	} 


	elseif ($page == 'Платья') {
		require('navProduct.php');
	} elseif ($page == 'Верхняя одежда') {
		require('navProduct.php');
	} 

	elseif ($page == 'Платья из шерсти') {
		require('navProduct.php');
	} elseif ($page == 'Платья с кулиской') {
		require('navProduct.php');
	} elseif ($page == 'Платья на пуговицах') {
		require('navProduct.php');
	} elseif ($page == 'Платья покроя реглан') {
		require('navProduct.php');
	} elseif ($page == 'Прямые платья') {
		require('navProduct.php');
	} elseif ($page == 'Платья без рукава') {
		require('navProduct.php');
	} elseif ($page == 'Платья с коротким рукавом') {
		require('navProduct.php');
	} elseif ($page == 'Пальто с жилетом') {
		require('navProduct.php');
	} elseif ($page == 'Плащи') {
		require('navProduct.php');
	} elseif ($page == 'Шерстяные пальто') {
		require('navProduct.php');
	} elseif ($page == 'Зимние куртки и пальто') {
		require('navProduct.php');
	} elseif ($page == 'Короткие куртки') {
		require('navProduct.php');
	} elseif ($page == 'Топы и свитера') {
		require('navProduct.php');
	} elseif ($page == 'Юбки и брюки') {
		require('navProduct.php');
	} elseif ($page == 'Аксессуары') {
		require('navProduct.php');
	} elseif ($page == 'Подарочные сертификаты') {
		require('navProduct.php');
	} 


	elseif ($page == '1') {
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

	// easy to read vardump
	function vardump($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}

	// get last items from DB
	function GET_navNewProductItems () {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price 
			FROM products
			INNER JOIN images ON images.id_product = products.id GROUP BY images.id_product DESC LIMIT 2, 10";
		$result = mysqli_query($connection, $sql);
		$navNewProductItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $navNewProductItems;
	}

	// get openProduct for some id
	function GET_openProducts ($product_id) {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price, XS, S, M, L, XL, XXL 
			FROM products
			INNER JOIN images ON images.id_product = products.id WHERE '$product_id' = products.id";
		$result = mysqli_query($connection, $sql);
		$openProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $openProducts;
	}

	// get main-page Items
	function GET_mainProducts () {
		global $connection;
		$sql = "SELECT products.id, images.image_way 
			FROM products
			INNER JOIN images ON images.id_product = products.id GROUP BY products.id LIMIT 9";
		$result = mysqli_query($connection, $sql);
		$mainProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $mainProducts;
	}

	// get nav-items with subtitle
	function GET_navMoreProductItems ($nav) {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price 
			FROM products
			INNER JOIN nav ON products.id_nav = nav.id
			INNER JOIN nav1NF ON nav.id_nav1NF = nav1NF.id
			INNER JOIN images ON images.id_product = products.id WHERE '$nav' = nav1NF.navName GROUP BY images.id_product";
		$result = mysqli_query($connection, $sql);
		$navMoreProductItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $navMoreProductItems;
	}

	// get nav-items without subtitle
	function GET_navSomeProductItems ($nav) {
		global $connection;
		$sql = "SELECT products.id, images.image_way, products.title, products.price 
			FROM products
			INNER JOIN nav ON products.id_nav = nav.id
			INNER JOIN images ON images.id_product = products.id WHERE '$nav' = nav.title_name GROUP BY images.id_product";
		$result = mysqli_query($connection, $sql);
		$navSomeProductItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

		return $navSomeProductItems; 

	}
?>