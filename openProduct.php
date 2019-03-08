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
	
	<div class="openProduct">
		<img src="/images/shop/shop-items/01.jpg" onclick="switchImg1();" class="content-img productItem takeThisImg" alt="sss">
		<img src="/images/shop/shop-items/012.jpg" onclick="switchImg2();" class="content-img productItem takeThisImg" alt="sss">
		<img src="/images/shop/shop-items/13.jpg" onclick="switchImg3();" class="content-img productItem takeThisImg" alt="sss">
		<img src="/images/shop/shop-items/14.jpg" onclick="switchImg4();" class="content-img productItem takeThisImg" alt="sss">
		<div class="selectedImg productItem">
			<img src="/images/shop/shop-items/01.jpg" class="content-img" id="switchThisImg" alt="sss">
		</div>
		<div class="infoAbout productItem">
			<h2>Какой-то длинный заголовок типо название платья</h2><br>
			<p>6 800.00р</p>
			<h3>размер</h3>
			<input type="radio" name="size1" class="size"><label for="size1">XS(42)</label><br>
			<input type="radio" name="size2" class="size"><label for="size2">S(44)</label><br>
			<input type="radio" name="size3" class="size"><label for="size3">M(46)</label><br> 
			<input type="radio" name="size4" class="size"><label for="size4">L(48)</label><br> 
			<input type="radio" name="size5" class="size"><label for="size5">XL(50)</label><br>
			<input type="radio" name="size6" class="size"><label for="size6">XXL(52)</label><br><br><br>  
			<button class="toBasket" title="В корзину">В корзину</button>
		</div>	
	</div>

	<div class="bottomButtons">
		<a href="#" class="searchLink"><div class="searchButton"><img src="/images/shop/search.png" title="Поиск"><p>Поиск</p></div></a>
		<a href="#" class="likeLink"><div class="likeButton"><img src="/images/shop/like.png" title="Избранное"><p>Избранное</p></div></a>
		<a href="#" class="basketLink"><div class="basketButton"><img src="/images/shop/shop-basket.png" title="Корзина"><p>Корзина</p></div></a>
	</div>
</main>
<script>
	function switchImg1() {
		// take img what we want
		let switchOnThisImg = document.getElementsByClassName('takeThisImg')[0].src;
		// take img what we need switch
		let switchThisImg = document.getElementById('switchThisImg').src;
		// replace img
		document.getElementById('switchThisImg').src = document.getElementById('switchThisImg').src.replace(switchThisImg,switchOnThisImg);
	}
	function switchImg2() {
		let switchOnThisImg = document.getElementsByClassName('takeThisImg')[1].src;
		let switchThisImg = document.getElementById('switchThisImg').src;
		document.getElementById('switchThisImg').src = document.getElementById('switchThisImg').src.replace(switchThisImg,switchOnThisImg);
	}
	function switchImg3() {
		let switchOnThisImg = document.getElementsByClassName('takeThisImg')[2].src;
		let switchThisImg = document.getElementById('switchThisImg').src;
		document.getElementById('switchThisImg').src = document.getElementById('switchThisImg').src.replace(switchThisImg,switchOnThisImg);
	}
	function switchImg4() {
		let switchOnThisImg = document.getElementsByClassName('takeThisImg')[3].src;
		let switchThisImg = document.getElementById('switchThisImg').src;
		document.getElementById('switchThisImg').src = document.getElementById('switchThisImg').src.replace(switchThisImg,switchOnThisImg);
	}
</script>
