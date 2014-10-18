<?php

// заглавието на страницата
$title = "Партньори";

// извикване хедъра
require_once("header.php");

?>

		<!-- Заглавие -->
		<header>
			<h1>Партньори</h1>
		</header>

		<!-- Основно съдържание на страницата -->
		<div id="content">
			<p style="text-align:center;margin:0 0 30px 0;">Списък на партньорски и приятелски служби.</p>

			<img class="friend" src="img/anonymous_logo.png" title="Клуб на Анонимниците" alt="">

			<img class="friend" src="img/umbrella_corporation.png" title="Корпорация на зомби-интусиастите" alt="">

			<img class="friend" style="width:400px;" src="img/aperture_laboratories.jpg" title="Разработчици на A.I." alt="">

		</div>

<?php

// извикваме футъра
require_once("footer.php");

?>