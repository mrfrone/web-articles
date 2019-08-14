<?
	$page = $_GET['page'];
?>
<html>
<head>
<title>web-articles</title>
	<!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<link type='text/css' rel='stylesheet' href='style.css'>-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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