<div class="jumbotron jumbotron-fluid">
  	<div class="container">
  		<h1 class="display-3">Add Article</h1>
  		Add the information about a new Mount.
	</div>
</div>
<form name="addarticles" enctype="multipart/form-data" method="post" action="requests/addarticlereq.php">
<div class="container">
	<div class="row">	
		<div class='col-12 col-lg-3'>
				<div class="form-group">
  					<label for="usr"><b>Заголовок статьи:</b></label>
  					<input type="text" class="form-control" name="title">
				</div>
   				<div class="form-group">
  					<label for="comment">Информация:</label>
  					<textarea class="form-control" cols="2" rows="10" name="info"></textarea>
				</div>
				<div class="form-group">
        			<input name="img" type="file" class="form-control-file" accept="image/*"/>
    			</div>
  				<input class="btn btn-primary" type="submit" value="Отправить" style="margin-right: 20%;">
   				<input class="btn btn-primary" type="reset" value="Очистить">
		</div>				
	</div>
</div>
</form>