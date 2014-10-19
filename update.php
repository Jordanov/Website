<script type="text/javascript">

var password = "blueberry";
var userPassword = prompt("Enter your password","");

if (password == userPassword)
{
	alert("Updating..");
} else
	{
		window.location= "../index.php";
	}

</script>
<?php

// заглавието на страницата
$title = "Update";

// извикване хедъра
require_once("header.php");

// изпълнява shell скрипта, който извършва синхронизацията с github
$status = shell_exec('sh -x update.sh');

?>

		<!-- Заглавие -->
		<header>
			<h1>Синхронизация с GitHub</h1>
		</header>

		<!-- Основно съдържание на страницата -->
		<div id="content">
			<p>Статус: <?= $status ?></p>
		</div>

<?php

// извикваме футъра
require_once("footer.php");

?>