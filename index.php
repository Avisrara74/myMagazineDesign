<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Document</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" type="text/css" href="styles/mainStyle.css">
		<link rel="stylesheet" type="text/css" href="styles/mediaStyle.css">
	</head>
	<body class="container">
		<header class="grid-item">
	<!-- Mobile nav -->
		<div class="grid-item" id="mobileNav" style="display: none;">
			<nav class="grid-item">
				<ul>
					<li><a href="#" class="navLink">Главная</a></li>
					<li><a href="#" class="navLink">Магазин</a></li>
					<li><a href="#" class="navLink">Доставка</a></li>
					<li><a href="#" class="navLink">Контакты</a></li>
					<li><a href="#" class="navLink">English</a></li>
				</ul>
			</nav>
		</div>
		<a href="#" onclick="openMenu()" class="mobileMenuLink2">
			<div class="grid-item mobileMenuLink">Menu</div>
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
			<a href="index.php" class="logoLink"><div class="grid-item logo"><img src="images/logo.png"></div></a>
		</header>
		<nav class="grid-item mainNav">
			<ul>
				<li><a href="#" class="navLink">Главная</a></li>
				<li><a href="#" class="navLink">Магазин</a></li>
				<li><a href="#" class="navLink">Доставка</a></li>
				<li><a href="#" class="navLink">Контакты</a></li>
				<li><a href="#" class="navLink">English</a></li>
			</ul>
		</nav>
		<main>
			<div class="grid-item grid-item1"><a href="#"><img src="images/1.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item2"><a href="#"><img src="images/2.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item3"><a href="#"><img src="images/3.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item4"><a href="#"><img src="images/4.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item5"><a href="#"><img src="images/5.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item6"><a href="#"><img src="images/6.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item7"><a href="#"><img src="images/7.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item8"><a href="#"><img src="images/8.jpg" class="content-img"></a></div>
			<div class="grid-item grid-item9"><a href="#"><img src="images/9.jpg" class="content-img"></a></div>
		</main>
		<footer class="grid-item">
			<p class="news">новости о новых коллекциях</p>
			<img src="images/cards.png" class="cards">
			<div class="socialButtons">
				<div class="social vk">
				    <a href="#" target="_blank"><i class="fa fa-vk fa-2x"></i></a>    
				</div>
				<div class="social instagram">
				    <a href="#" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
				</div>
				<div class="social facebook">
				    <a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>    
				</div>
			</div>
			<div class="joinEmail">
				<input type="text" class="joinText" placeholder="Email Adress">
				<a href="#" class="joinButton"><button>Подписаться</button></a>
			</div>
		</footer>
	</body>
</html>