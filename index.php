<?
	$page = $_GET['page'];
	$connect = mysql_connect(localhost, root, '');
	$select_db = mysql_select_db('articles web-site');

	mysql_query("SET NAMES 'cp1251'");
?>
<html>
<head>
<title>Web-articles</title>
	<link type='text/css' rel='stylesheet' href='style.css'>
	<link rel="shortcut icon" href="/images/favicon.jpg" type="image/x-icon">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style>
		p
		{
			text-indent: 30px;
		}
	</style>
</head>
<body class="bg-light">
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
		case 'article':
			include 'pages/article.php'; 
		break;
		case 'addarticle':
			include 'pages/addarticle.php'; 
		break;
		default:
			include 'pages/main.php';
	}
?>
<? include 'elements/footer.php'; ?>
</body>
</html>