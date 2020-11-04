<!DOCTYPE html>
<html lang="fr">
    <head>

       	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
		<h1>Poster un commentaire</h1>
		<div class="form-row">	
			<form method="POST" action="../public/index.php?route=add_comment&articleId=articleId">
			    <label for="pseudo">Pseudo</label><br>
			    <input class="form-control mx-sm-3" type="text" id="pseudo" name="pseudo"><br>
			    <label for="content">Message</label><br>
			    <input type="hidden" id="POST" name="article_id" value="<?php echo $_GET['articleId'] ?>"><br>
			    <textarea class="form-control mx-sm-3" id="content" name="content"></textarea><br>
				<input class="btn btn-success" type="submit" value="Ajouter" id="submit" name="submit"></br>
				
			</form>
		</div>
	</body>
</html>