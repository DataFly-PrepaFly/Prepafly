<?php 
	session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

	<?php
		session_destroy();
		header('Location: vues/Connexion.php');
	?>
</body>
</html>