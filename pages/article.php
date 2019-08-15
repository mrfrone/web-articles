<? 
		$connect = mysql_connect(localhost, root, '');
		$select_db = mysql_select_db('articles web-site');

		mysql_query("SET NAMES 'cp1251'");

		$select = mysql_query("SELECT * FROM articles");

		$articlenum = $_GET['num'];

		while($result = mysql_fetch_array($select))
		{
			if($articlenum == $result[num])
			{
				echo "
				<div class='container'>
  					<div class='row justify-content-center align-items-center'>
						<img class='card-img-top' alt='Card header image' src='$result[previewimage]'></br>
						<h5 align='center' class='card-title'>$result[title]</h5>
						<p class='card-text'>$result[content]</p></br>
					</div>
				</div>
				";
				$flag = 1;
				break;
			}
		}
		if($flag == 1)
		{

		}
		else
		{
			include 'pages/main.php';
		}
?>