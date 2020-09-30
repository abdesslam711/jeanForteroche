
<h1>Modifier mon article</h1>
<div>
    <form method="post" action="index.php?route=send_article&articleId=<?php echo $_GET['articleId']?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php echo $article[0]['title'] ?>"><br>

        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"> <?php echo $article[0]['content'] ?> </textarea><br>

        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="author" value="<?php echo $article[0]['author'] ?>"><br>

        <input type="submit" value="Mettre à jour" id="submit" name="submit">
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>