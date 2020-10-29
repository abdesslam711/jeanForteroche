
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
        <title>Blog Jean Forteroche</title>
    </head>
    <body>
        <div>
            <h2>Page d'administration</h2>
            <h2>Bonjour <?php echo $_SESSION['user']; ?></h2>
        </div>
        <div class="col-sm-6">
            <h2 class="btn_article"><a href="../public/index.php?route=add_Article">Ajouter un article</a></h2>
            <h2 class="btn_article"><a href="../public/index.php?route=register">Inscription</a></h2> 

            
        </div>
        <div class="col-sm-6">
            <div id="bloc_page">  
                <!--on recupére tous nos article-->
                <?php
                    foreach ($articles as $article ) {
                ?>
                <div><!--Lorsqu'on click sur le titre de l'article ca nous affiche l'article complet sur une page-->
                    <header class="header_article">
                        <h4><a href="../public/index.php?route=single&articleId=<?= htmlspecialchars($article['id']);?>"><?= htmlspecialchars($article['title']);?></a></h4>
                        <a href="../public/index.php?route=edit_Article&articleId=<?= htmlspecialchars($article['id']);?>">Modifier l'article</a>
                        <a href="../public/index.php?route=deletarticle&articleId=<?= htmlspecialchars($article['id']);?>">Supprimer l'article</a>  
                    </header>
                </div>
                <br>
                <?php
                    }
                    ?>
            </div>
        </div>
        <div class="">
        <?php
            foreach ($comments as $comment) {    
                ?>
                <p><strong><?= htmlspecialchars($comment['pseudo']);?></p> 
                <p><?= htmlspecialchars($comment['content']);?></p>
                <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
                <a href="../public/index.php?route=deletcomment&id=<?php echo $comment['id']?>&articleId=<?= htmlspecialchars($article['id']);?>">Supprimer le commentaire</a></br>
                <?php
                }
                    /*$comments->closeCursor()*/;
                ?>
        </div>
            <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </body>
</html>