<!DOCTYPE html>
<html>
 <head>
	 <style>
   p {
    text-indent: 20px; /* Отступ первой строки в пикселах */
   }
	 </style>
	 <link rel-"stylesheet" href="css/style.css">
	 <?php
	  $tittle = "ООО ВЕЛЕС";
	 require_once "blocks/head.php" ?>
 </head>
 <body>
<?php require_once "blocks/header.php" ?>
<!--			 СТИЛЬ ДЛЯ ГЛАВНОЙ СТРАНИЦЫ-->
	<div class="company">
	 <p>О компании</p>
		 <p>Первое предложение</p>
		 <p>Второе предложение</p>
		 <p>Третье предложение</p>
		 <p>Четвёртое предложение</p>
	 </div>
	 <HR>
	 <?php require_once "blocks/slider.php" ?>
	 <div class="product">
	 <p>Поставляемая продукция:</p>
	 <ul>
	 <li>Продукт 1</li>
		 <li>Продукт 2</li>
	 	<li>Продукт 3</li>
		 <li>Продукт 4</li>
	 	<li>Продукт 5</li>
	 </ul>
	 </div>
<!--	 ФУТЕР-->
	 <?php require_once "blocks/footer.php" ?>
	<script src="swup.min.js"></script>
	 <script>
	 const swup = new Swup();
	 </script>
 </body>
</html>