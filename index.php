<?
	$page = $_GET['page'];
?>
<html>
<head>
<title>web-articles</title>
</head>
<body>
<header>
	<? include 'elements/header.php'; ?> 
</header>
<? 	
	switch ($page) 
	{
		case 'main':
			include 'pages/main.php'; 
		break;

		case 'info':
			include 'pages/info.php'; 
		break;

		default:
			include 'pages/main.php';
	}
?>
<footer>
    <? include 'elements/footer.php'; ?>
</footer>
</body>
</html>