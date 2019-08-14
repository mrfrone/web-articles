<?
	$page = $_GET['page'];
?>
<html>
<head>
<title>web-articles</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link type='text/css' rel='stylesheet' href='style.css'>
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