<?		
		$del = $_GET['delete'];
		if($del == 1)
		{
			echo "
				<div class='container' style='padding:25px;'>
  					<div class='row justify-content-center align-items-center'>
						<h5 align='center' class='card-title'>Статья удалена.</h5></br>
					</div>
				</div>
				";
		}
		else
		{
			$select = mysql_query("SELECT * FROM articles");

			$articlenum = $_GET['num'];

			while($result = mysql_fetch_array($select))
			{
				if($articlenum == $result[num])
				{
					echo "
					<div class='container' style='padding:25px;'>
  						<div class='row justify-content-center align-items-center'>
							<img class='card-img-top' src='$result[previewimage]'></br>
							<h5 align='center' class='card-title'>$result[title]</h5></br>
							</br>
							<p class='card-text'>$result[content]</p></br>
						</div>
					</div>
					";
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
		}	
?>
