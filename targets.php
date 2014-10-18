<?php

// заглавието на страницата
$title = "Разследвани лица";

// извикване хедъра
require_once("header.php");

?>

		<!-- Заглавие -->
		<header>
			<h1>Наблюдавани лица "Persons of Interest"</h1>
		</header>

		<!-- Основно съдържание на страницата -->
		<div id="content">
			<p>Списък на издирваните лица от агенцията - цели на операцията</p>

			<div class="profile">
				<a href="nakov.php">
				<img class="target" src="img/targets/svetlin_nakov.jpg" alt="nakov">
				</a>
				<a href="https://softuni.bg/users/profile/show/nakov">Светлин Наков</a>
			</div>

			<div class="clear"></div>

		</div>

<?php

// извикваме футъра
require_once("footer.php");

?>