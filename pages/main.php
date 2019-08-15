<div class="jumbotron jumbotron-fluid">
  	<div class="container">
  		<h1 class="display-3">Main</h1>
  		Here you can find information about mountains.
	</div>
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
				<div class='col-12 col-lg-3'>
		    		<figure class='figure'>
					<img class='card-img-top img-thumbnail' src='$result[previewimage]'></br>
					<h5 align='center' class='card-title'>$result[title]</h5>
					<p class='text-justify'>$preview</p></br>
					<a style='float:right;'align='center' href='index.php?page=article&num=$result[num]' class='btn btn-info'>Подробнее</a>
		        </figure>
				</div>				
				";
			}
		?>
    </div>
</div>
<? 
	function previewText($text) 
	{
		$text = mb_substr($text, 0, 125).'...';
		return $text;
    }
?>