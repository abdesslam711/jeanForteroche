
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon blog</title>
    </head>

    <body>
        <div class="blog_article">
        
            <?php
                
                //$article = $articles->fetch()
                foreach ($articles as $article) {
              
                      
            ?>
                    <!--On recupere les information de article-->
            <div>
               
                <h2><?= htmlspecialchars($article['title']);?></h2>
                <p><?= htmlspecialchars($article['content']);?></p>
                <p><?= htmlspecialchars($article['author']);?></p>
                <p>Créé le : <?= htmlspecialchars($article['createdAt']);?></p>

                <?php include('add_comment.php');?>
            </div>
                <br>
                <?php     
                }
                ?>
            <div class="actions">
                <a href="../public/index.php?route=edit_Article&articleId=<?php echo $_GET['articleId']?>">Modifier l'article</a></br>
                <a href="../public/index.php?route=deletarticle&articleId=<?php echo $_GET['articleId']?>">Supprimer l'article</a>
            </div> 
            <div id="comments" class="text-left" style="margin-left: 50px">
                <h3>Commentaires</h3>
                <?php
                    foreach ($comments as $comment) 
                    
                    {
                ?>
                <h4><?= htmlspecialchars($comment['pseudo']);?></h4>
                <p><?= htmlspecialchars($comment['content']);?></p>
                <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
                <?php
                }
                    $comments->closeCursor();
                ?>
            </div>
                
               <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </body>
</html>