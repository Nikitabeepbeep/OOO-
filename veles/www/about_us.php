<!DOCTYPE html>
<html>
 <head>
	 <meta charset="utf-8">
	 <link rel-"stylesheet" href="css/style.css">
	 <?php
	 $tittle = "Информация о нас";
	 require_once "blocks/head.php"?>
	</head>
	  <style type="text/css">
   .line { 
    border-left: 2px solid red; /* Параметры линии */ 
    margin-left: 25px; /* Отступ слева */
    padding-left: 10px; /* Расстояние от линии до текста */ 
   }
  </style>
	<body>
	<?php require_once  "blocks/header.php"?>
<!--			Наполнение страницы-->
			<?php require_once "blocks/find_us.php"?>
	<?php require_once  "blocks/footer.php" ?>
	</body>
</html>