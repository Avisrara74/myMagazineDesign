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
		$product_id = $_GET['page'];
		$openProducts = GET_openProducts($product_id); 
	?>
	<div class="openProduct">	
			<img src="<?php echo $openProducts[0]['image_way']; ?>" onclick="switchImg1();" class="content-img productItem takeThisImg" alt="sss">
			<img src="<?php echo $openProducts[1]['image_way']; ?>" onclick="switchImg2();" class="content-img productItem takeThisImg" alt="sss">
			<img src="<?php echo $openProducts[2]['image_way']; ?>" onclick="switchImg3();" class="content-img productItem takeThisImg" alt="sss">
			<img src="<?php echo $openProducts[3]['image_way']; ?>" onclick="switchImg4();" class="content-img productItem takeThisImg" alt="sss">
		<div class="selectedImg productItem">
			<img src="<?php echo $openProducts[0]['image_way']; ?>" class="content-img" id="switchThisImg" alt="sss">
		</div>
		<div class="infoAbout productItem">
			<h2><?php echo $openProducts[0]['title'] ?></h2><br>
			<p><?php echo $openProducts[0]['price'] ?>.00р.</p>
			<h3>размер</h3>
			<form>
				<input type="radio" name="size" class="size">
				<label for="size1">XS(42) - 
					<?php if ($openProducts[0]['XS'] > 0) {
						  echo $openProducts[0]['XS']; 
						  } else {
						  	echo 'НЕТ';
						  }; 
					?>
				</label>
				<br>	
				<input type="radio" name="size" class="size">
				<label for="size2">S(44) - 
					<?php if ($openProducts[0]['S'] > 0) {
						  echo $openProducts[0]['S']; 
						  } else {
						  	echo 'НЕТ';
						  }; 
					?>
				</label>
				<br>	
				<input type="radio" name="size" class="size">
				<label for="size3">M(46) - 
					<?php if ($openProducts[0]['M'] > 0) {
						  echo $openProducts[0]['M']; 
						  } else {
						  	echo 'НЕТ';
						  }; 
					?>
				</label>
				<br>		
				<input type="radio" name="size" class="size">
				<label for="size4">L(48) - 
					<?php if ($openProducts[0]['L'] > 0) {
						  echo $openProducts[0]['L']; 
						  } else {
						  	echo 'НЕТ';
						  }; 
					?>
				</label><br>		
				<input type="radio" name="size" class="size">
				<label for="size5">XL(50) - 
					<?php if ($openProducts[0]['XL'] > 0) {
						  echo $openProducts[0]['XL']; 
						  } else {
						  	echo 'НЕТ В НАЛИЧИИ';
						  }; 
					?>
				</label>
				<br>		
				<input type="radio" name="size" class="size">
				<label for="size6">XXL(52) - 
					<?php if ($openProducts[0]['XXL'] > 0) {
						  echo $openProducts[0]['XXL']; 
						  } else {
						  	echo 'НЕТ';
						  }; 
					?>
				</label>	
				<button class="toBasket" title="В корзину">В корзину</button>
			</form>
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
