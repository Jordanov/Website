<?php if (!isset($title)) $title = ""; ?>
<!DOCTYPE html>
<html lang="bg">

	<head>
		<meta charset="utf-8"/>
		<title>НАБЛК - <?= $title; ?></title>
		<link rel="stylesheet" type="text/css" href="css/styles.css?"/>
	</head>

	<body>
		<!-- Навигация, лого -->
		<nav>
			<ul>
				<li><a href="index.php">Начало</a></li>
				<li><a href="about.php">Информация</a></li>
				<li><a href="blueberry.php">ОП "Blueberry"</a></li>
				<li><a href="targets.php">Разследвани</a></li>
				<li><a href="team.php">Екип</a></li>
				<li><a href="friends.php">Приятели</a></li>
				<li><a href="contacts.php">Контакти</a></li>
			</ul>

			<!-- Clearfix-че -->
			<div class="clear"></div>
		</nav>