<main class="mainShop">
	<ul id="menu">
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
	<input type="text" class="shopSearch" placeholder="Поиск" title="Поиск">
	
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

	<div class="bottomButtons">
		<a href="#" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="likeLink"><div class="likeButton"><img src="/images/shop/like.png" title="Избранное"><p>Избранное</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>