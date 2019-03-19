<main class="mainShop">  
	<?php 
		shopNav ();
	?>
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
						  	echo 'НЕТ';
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

	<?php 
		bottomButtons ();
	?>
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
