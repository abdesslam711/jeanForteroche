
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
                    <?php
                        if(isset($_SESSION['erreur_commentaire'])){
                            echo "<span>".$_SESSION['erreur_commentaire']."<span>";
                            unset($_SESSION['erreur_commentaire']); 
                        }
                    ?>
                    <!--<a href="../public/index.php?route=edit_Article&articleId=<?php echo $_GET['articleId']?>">Modifier l'article</a></br>
                    <a href="../public/index.php?route=deletarticle&articleId=<?php echo $_GET['articleId']?>">Supprimer l'article</a></br> -->
                </div> 
                <div id="comments" class="text-left" style="margin-left: 50px">
                    
                    <h3>Commentaires</h3>
                    <?php
                        foreach ($comments as $comment) 
                        {
                    ?>
                    <p><strong><?= htmlspecialchars($comment['pseudo']);?></strong><button><a type="button" href="../public/index.php?route=signalcomment&articleId=<?php echo $_GET['articleId']?>">Signaler</p></button></a></p>
                    <p><?= htmlspecialchars($comment['content']);?></p>
                    <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
                    
                    <!--<a href="../public/index.php?route=deletcomment&id=<?php echo $comment['id']?>&articleId=<?php echo $_GET['articleId']?>">Supprimer le commentaire</a></br>-->
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