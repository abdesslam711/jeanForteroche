
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
            </div>
                <br>
                <?php     
                }
                ?>
            <div class="contenu_comment" >
                <div class="actions">
                    <?php include('add_comment.php');?>
                    <!--<a href="../public/index.php?route=edit_Article&articleId=<?php echo $_GET['articleId']?>">Modifier l'article</a></br>
                    <a href="../public/index.php?route=deletarticle&articleId=<?php echo $_GET['articleId']?>">Supprimer l'article</a></br> -->
                </div> 
                <div id="comments" class="text-left" style="margin-left: 50px">
                    
                    <h3>Commentaires</h3>
                    <?php
                        foreach ($comments as $comment) 
                        {
                    ?>
                    <p><strong><?= htmlspecialchars($comment['pseudo']);?></strong><button><a type="button" href="../public/index.php?route=flagcomment&articleId=<?php echo $_GET['articleId']?>">Signaler</p></button></a>
                    <p><?= htmlspecialchars($comment['content']);?></p>
                    <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
                    <a href="../public/index.php?route=deletcomment&id=<?php echo $comment['id']?>&articleId=<?php echo $_GET['articleId']?>">Supprimer le commentaire</a></br>
                    <?php
                    }
                        $comments->closeCursor();
                    ?>
                    <a href="../public/index.php">Retour à l'accueil</a>
                </div> 
            </div>    
        </div>
    </body>
</html>