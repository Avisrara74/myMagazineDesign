<?php include('/connectionDB.php');?>
<!doctype html>
<html lang="ru">
	<head>
		<title>Document</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>
	<body class="container">
		<header class="grid-item">
	<!-- Mobile nav -->
		<div class="grid-item" id="mobileNav" style="display: none;">
			<nav class="grid-item">
				<ul>
					<li><a href="/index.php" class="navLink" title="Главная">Главная</a></li>
					<li><a href="/index.php?page=shop" class="navLink" title="Магазин">Магазин</a></li>
					<li><a href="/index.php?page=delivery" class="navLink" title="Доставка">Доставка</a></li>
					<li><a href="/index.php?page=contact" class="navLink" title="Контакты">Контакты</a></li>
					<li><a href="#" class="navLink" title="Сменить язык">English</a></li>
				</ul>
			</nav>
		</div>
		<a href="#" onclick="openMenu()" class="mobileMenuLink2">
			<div class="grid-item mobileMenuLink" title="Открыть/закрыть меню">Меню</div>
		</a>
		<script>
			function openMenu() {
				if(document.getElementById('mobileNav').style.display === 'none'){
					document.getElementById('mobileNav').style.display = 'block';
				} else {
					document.getElementById('mobileNav').style.display = 'none';
				}
			}
		</script>	
	<!-- .............................................. -->
			<a href="index.php" class="logoLink"><div class="grid-item logo"><img src="images/logo.png" alt="Логотип компании"></div></a>
		</header>
		<nav class="grid-item mainNav">
			<ul>
				<li><a href="/index.php" class="navLink" title="Главная">Главная</a></li>
				<li><a href="/index.php?page=shop" class="navLink" title="Магазин">Магазин</a></li>
				<li><a href="/index.php?page=delivery" class="navLink" title="Доставка">Доставка</a></li>
				<li><a href="/index.php?page=contact" class="navLink" title="Контакты">Контакты</a></li>
				<li><a href="#" class="navLink" title="Сменить язык">English</a></li>
			</ul>
		</nav>
		<?php include('/func.php'); ?>
		<footer class="grid-item">
			<p class="news">новости о новых коллекциях</p>
			<img src="images/cards.png" class="cards" title="Способы оплаты">
			<div class="socialButtons">
				<div class="social vk">
				    <a href="#" target="_blank" title="Группа вконтакте"><i class="fa fa-vk fa-2x"></i></a>    
				</div>
				<div class="social instagram">
				    <a href="#" target="_blank" title="Инстаграмм"><i class="fa fa-instagram fa-2x"></i></a>
				</div>
				<div class="social facebook">
				    <a href="#" target="_blank" title="Группа Facebook"><i class="fa fa-facebook fa-2x"></i></a>    
				</div>
			</div>
			<div class="joinEmail">
				<input type="text" class="joinText" placeholder="Email Adress" title="Ввести Email">
				<button class="joinButton" title="Подписаться на новости">Подписаться</button>
			</div>
		</footer>
	</body>
	<?php

	mysqli_close($connection);

	?>
</html>