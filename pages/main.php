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

		$res = mysql_query("SELECT COUNT(*) FROM `articles`");
		$row = mysql_fetch_row($res);
		$total = $row[0]; // общее количество элементов

		$kol = 8;  //количество записей для вывода

		$str_pag = ceil($total / $kol); // количество страниц
		if (isset($_GET['nav'])) {
			switch ($_GET['nav']) {
				case $_GET['nav'] <= $str_pag && $_GET['nav'] >= 1:
					$page = $_GET['nav']; //текущая страница
					break;
				default:
					$page = 1;
			}
		} else {
			$page = 1;
		}

		$art = ($page * $kol) - $kol; // с какой записи выводить

		$select = mysql_query("SELECT * FROM articles ORDER BY num DESC LIMIT $art,$kol");

		while ($result = mysql_fetch_array($select)) {
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
	</br>
	</br>
<div class="container" style="width: 40%; margin-left: 30%;">
	<div class="row justify-content-center align-items-center">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<?
				if ($page <= 1) {
					echo "<li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li>"; // page-item disabled
				} else {
					echo "<li class='page-item'><a class='page-link' href='index.php?nav=" . ($page - 1) . "'>Previous</a></li>"; // page-link
				}
				for ($i = 1; $i <= $str_pag; $i++) {
					echo "<li class='page-item'><a class='page-link' href=index.php?nav=" . $i . ">" . $i . "</a>";
				}
				if ($page >= $str_pag) {
					echo "<li class='page-item page-item disabled'><a class='page-link' href='#'>Next</a></li>"; // page-item disabled
				} else {
					echo "<li class='page-item'><a class='page-link' href='index.php?nav=" . ($page + 1) . "'>Next</a></li>"; // page-link
				}
				?>
			</ul>
		</nav>
	</div>
</div>
<?
function previewText($text)
{
	$text = mb_substr($text, 0, 125) . '...';
	return $text;
}
?>