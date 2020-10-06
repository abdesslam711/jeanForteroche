<!DOCTYPE html>
<html lang="fr">
    <head>
    </head>
    <body>

        <?php include("header.php"); ?>
        
        <div id="bloc_page">  
            <!--on recupére tous nos article-->
            <?php
            foreach ($articles as $article ) {
            ?>
            
            <div><!--Lorsqu'on click sur le titre de l'article ca nous affiche l'article complet sur une page-->
                <header class="header_article">
                    <h4><a href="../public/index.php?route=single&articleId=<?= htmlspecialchars($article['id']);?>"><?= htmlspecialchars($article['title']);?></a></h4>
                </header>
                <div  class="articles">
                    <p><?= htmlspecialchars($article['content']);?></p>
                    <p><?= htmlspecialchars($article['author']);?></p>
                </div>
                <div class="header_article">
                <p>Créé le : <?= htmlspecialchars($article['createdAt']);?></p>
                </div>
            </div>
            
            <br>
            <?php
            }
            
            ?>
        </div>
        <div>
            <!--<h2><a href="add_article.php">Ajouter un article</a></h2>-->
            <h2 class="btn_article"><a href="../public/index.php?route=add_Article">Ajouter un article</a></h2>
            <h2 class="btn_article"><a href="../public/index.php?route=register">Inscription</a></h2>
            <h2 class="btn_article"><a href="../public/index.php?route=login">Connexion</a></h2>
        </div>
        
    </body>
</html>