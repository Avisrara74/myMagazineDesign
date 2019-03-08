<main class="mainShop">
	<ul id="menu">
			<li class="first-li"><a href="/index.php?page=newProducts" title="Новые поступления">Новые поступления</a></li>
			<li>
				<a href="" title="Платья">Платья ↓</a>
				<ul>
					<li><a href="#" title="Платья из шерсти">Платья из шерсти</a></li>
					<li><a href="#" title="Платья с кулиской">Платья с кулиской</a></li>
					<li><a href="#" title="Платья на пуговицах">Платья на пуговицах</a></li>
					<li><a href="#" title="Платья покроя реглан">Платья покроя реглан</a></li>
					<li><a href="#" title="Прямые платья">Прямые платья</a></li>
					<li><a href="#" title="Платья без рукава">Платья без рукава</a></li>
					<li><a href="#" title="Платья с коротким рукавом">Платья с коротким рукавом</a></li>
				</ul>
			</li>
			<li>
				<a href="" title="Верхняя одежда">Верхняя одежда ↓</a>
				<ul class="mobileWidthFix">
					<li><a href="#" title="Стеганые пальто и куртки">Стеганные пальто и куртки</a></li>
					<li><a href="#" title="Плащи">Плащи</a></li>
					<li><a href="#" title="Шерстяные пальто">Шерстяные пальто</a></li>
					<li><a href="#" title="Зимние куртки и пальто">Зимние куртки и пальто</a></li>
					<li><a href="#" title="Короткие куртки">Короткие куртки</a></li>
				</ul>
			</li>
			<li><a href="" title="Топы и свитера">Топы и свитера</a></li>
			<li><a href="" title="Юбки и брюки">Юбки и брюки</a></li>
			<li><a href="" title="Аксессуары">Аксессуары</a></li>
			<li>
				<a href="" title="Акции">Акции ↓</a>
				<ul class="mobileWidthFix">
				<li><a href="#" title="Вещи со скидкой">Вещи со скидкой</a></li>
				<li><a href="#" title="Подарочные сертификаты">Подарочные сертификаты</a></li>
				</ul>
			</li>
		</ul>
	<input type="text" class="shopSearch" placeholder="Поиск" title="Поиск">

	<?php 
		$navNewProductItem = GET_navNewProductItems ();
		$i = 0;
	?>

	<h2 class="afterNavProduct">Новые поступления</h2>
	<div class="navProduct">
		<?php foreach ($navNewProductItem as $navNewProductItems): ?>
			<div class="navProductItem">
				<div class="lowIncrease"><a href="/index.php?page=openProduct=<?php echo $navNewProductItems['id']; ?>"><img src="<?php echo $navNewProductItems['image_way']; ?>" class="content-img" alt="sss"></a></div>
				<p><a href="#"><?php echo $navNewProductItems['title'] ?></a></p>
				<p><?php echo $navNewProductItems['price'] ?>.00р.</p>
			</div>
		<?php endforeach; ?>	
	</div>

	<div class="bottomButtons">
		<a href="#" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="likeLink"><div class="likeButton"><img src="/images/shop/like.png" title="Избранное"><p>Избранное</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>
