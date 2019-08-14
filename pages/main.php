<div class="maincontent">
	<ul>
		<? 
			$connect = mysql_connect(localhost, root, '');
			$select_db = mysql_select_db('articles web-site');

			mysql_query("SET NAMES 'cp1251'");

			$select = mysql_query("SELECT * FROM articles");

			while($result = mysql_fetch_array($select))
			{
				echo "

				<li>
					<img src='$result[previewimage]'></br>
					<h4 align='center'>$result[title]</h4></br>
					<p align='justify'>$result[content]</p></br>
					<nav align='right' style='margin-right: 10px;margin-bottom: 10px;'><button>���������</button></nav>
				</li>
				";
			}

		?>
		<li>
			1</br>
			<img src="images/img1.jpg"></br>
			<h4 align="center">Горы 1</h4></br>
			<p align='justify'>Оооочень много текставыфовфлдывлывыфлдвоыфлдвоыфлдвоы флдыфвфывыфвфвыффвфыовлдф</p></br>
			<nav align='right' style='margin-right: 10px;margin-bottom: 10px;'><button>Кнопка</button></nav>
		</li>
	</ul>
</div>