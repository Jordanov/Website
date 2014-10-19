<?php

// заглавието на страницата
$title = "Екип";

// извикване хедъра
require_once("header.php");

?>

		<!-- Заглавие -->
		<header>
			<h1>Екип</h1>
		</header>

		<!-- Основно съдържание на страницата -->
		<div id="content">

			<div class="profile">
				<img src="img/team/valia-crop.jpg" alt="valia">
				<a style="width:575px;margin-bottom:20px" href="valia.php">Валя Делибашева</a>
				<p><i>Специален агент под прикритие.</i></p>

			</div>

			<div class="clear"></div>

			<div class="profile">
				<img src="img/team/roumen-crop.jpg" alt="roumen">
				<a style="width:575px;margin-bottom:20px" href="roumen.php">Румен Дамянов</a>
				<p><i>Специален агент под прикритие.</i></p>
			</div>

			<div class="clear"></div>

			<div class="profile">
				<img src="img/team/snowden.jpg" alt="snowden">
				<a style="width:575px;margin-bottom:20px">Едуард Сноудън</a>
				<p><i>Специален съветник по тактики от типа "бягай преди да те хванат".</i></p>
			</div>

			<div class="clear"></div>

		</div>

<?php

// извикваме футъра
require_once("footer.php");

?>