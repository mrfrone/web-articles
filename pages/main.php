<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1 class="display-3">Hello!</h1>
  <p class="lead">Here you can find information about the mountains.</p>
</div>
<div class="container">
  <div class="row">
		<? 
			$connect = mysql_connect(localhost, root, '');
			$select_db = mysql_select_db('articles web-site');

			mysql_query("SET NAMES 'cp1251'");

			$select = mysql_query("SELECT * FROM articles");

			while($result = mysql_fetch_array($select))
			{
				$preview = previewText($result[content]);
				echo "
				<div class='col-sm-6 col-lg-3'>
					<img class='card-img-top' alt='Card header image' src='$result[previewimage]'></br>
					<h5 align='center' class='card-title'>$result[title]</h5>
					<p class='card-text'>$preview</p></br>
					<a href='#' class='btn btn-info'>Подробнее</a>
				</div>
				";
			}
		?>
	</div>
</div>
<? 
	function previewText($text) 
	{
		$text = mb_substr($text, 0, 80).'...';
		return $text;
    }
?>