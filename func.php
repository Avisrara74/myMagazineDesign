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
	} elseif ($page == 'shop?=openProduct') {
		require('openProduct.php');
	}
?>