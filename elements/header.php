<nav class="navbar navbar-light bg-light navbar-expand-md">
	<a href="index.php" class="navbar-brand">Web-articles</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="navbar-item">
				<a href="index.php?page=main" class="nav-link">Main</a>
			</li>
			<li class="navbar-item">
				<a href="index.php?page=info" class="nav-link">Information</a>
			</li>
			<li class="navbar-item">
				<a href="index.php?page=addarticle" class="nav-link">Add Article</a>
			</li>
			<?
			if (isset($_GET['num'])) {
				$select = mysql_query("SELECT * FROM articles");

				$articlenum = $_GET['num'];

				while ($result = mysql_fetch_array($select)) {
					if ($articlenum == $result[num]) {
						echo 	"<li class='navbar-item'>
									<a href='index.php?page=article&num=$result[num]&delete=1' class='nav-link'>Remove Article</a>
								</li>";
						$flag = 1;
						if (isset($_GET['delete'])) 
						{
							$del = $_GET['delete'];
							if ($del == 1) 
							{
								mysql_query("DELETE FROM `articles` WHERE `articles`.`num` = $articlenum");
							}
						}
						break;
					}
				}
			}
			?>
		</ul>
	</div>
</nav>