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

	elseif (is_numeric($page)) {
		require('openProduct.php');
	} 

	// easy to read vardump
	function vardump($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}


	// some content functions 

	function bottomButtons () {
		echo '<div class="bottomButtons">
			  <a href="#" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
			  <a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
			  </div>';
	}

	function shopNav () {
		echo '<ul id="menu">
			<li class="first-li"><a href="/index.php?page=Новые поступления" title="Новые поступления">Новые поступления</a></li>
			<li>
				<a href="/index.php?page=Платья" title="Платья">Платья ↓</a>
				<ul>
					<li><a href="/index.php?page=Платья из шерсти" title="Платья из шерсти">Платья из шерсти</a></li>
					<li><a href="/index.php?page=Платья с кулиской" title="Платья с кулиской">Платья с кулиской</a></li>
					<li><a href="/index.php?page=Платья на пуговицах" title="Платья на пуговицах">Платья на пуговицах</a></li>
					<li><a href="/index.php?page=Платья покроя реглан" title="Платья покроя реглан">Платья покроя реглан</a></li>
					<li><a href="/index.php?page=Прямые платья" title="Прямые платья">Прямые платья</a></li>
					<li><a href="/index.php?page=Платья без рукава" title="Платья без рукава">Платья без рукава</a></li>
					<li><a href="/index.php?page=Платья с коротким рукавом " title="Платья с коротким рукавом">Платья с коротким рукавом</a></li>
				</ul>
			</li>
			<li>
				<a href="/index.php?page=Верхняя одежда" title="Верхняя одежда">Верхняя одежда ↓</a>
				<ul class="mobileWidthFix">
					<li><a href="/index.php?page=Пальто с жилетом" title="Пальто с жилетом">Пальто с жилетом</a></li>
					<li><a href="/index.php?page=Плащи" title="Плащи">Плащи</a></li>
					<li><a href="/index.php?page=Шерстяные пальто" title="Шерстяные пальто">Шерстяные пальто</a></li>
					<li><a href="/index.php?page=Зимние куртки и пальто" title="Зимние куртки и пальто">Зимние куртки и пальто</a></li>
					<li><a href="/index.php?page=Короткие куртки" title="Короткие куртки">Короткие куртки</a></li>
				</ul>
			</li>
			<li><a href="/index.php?page=Топы и свитера" title="Топы и свитера">Топы и свитера</a></li>
			<li><a href="/index.php?page=Юбки и брюки" title="Юбки и брюки">Юбки и брюки</a></li>
			<li><a href="/index.php?page=Аксессуары" title="Аксессуары">Аксессуары</a></li>
			<li>
				<a href="#" title="Акции">Акции ↓</a>
				<ul class="mobileWidthFix">
				<li><a href="#" title="Вещи со скидкой">Вещи со скидкой</a></li>
				<li><a href="/index.php?page=Подарочные сертификаты" title="Подарочные сертификаты">Подарочные сертификаты</a></li>
				</ul>
			</li>
		</ul>
	<input type="text" class="shopSearch" placeholder="Поиск" title="Поиск">';
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