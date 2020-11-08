
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Blog Jean Forteroche</title>
    </head>
    <body>
        <div class="welcome_top">
            <?php
                if(isset($_SESSION['admin_connexion'])){
                    echo "<span>".$_SESSION['admin_connexion']."<span>";
                    unset($_SESSION['admin_connexion']); 
                }
            ?>
        </div>
        <header role="banner">
            <!-- inclusion du menu -->
            <div class="row justify-content-center" role="navigation">
                <nav class="navbar navbar-expand-lg navbar-dark col-sm fixed-top">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Jean Forteroche<br><small>Auteur et écrivain</small></a>
                    <div class="collapse navbar-collapse" id="navbarToggler">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=about">Qui suis-je ?</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../public/index.php?route=contact">Contact</a>
                            </li>
                            <li class="nav-item">
                            <a href="../public/index.php?route=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Deconnexion</a>
                                <!--<a class="nav-link" href="/contact">Contact</a>-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"> <?php echo $_SESSION['user']; ?></a>
                            </li>		
                        </ul>
                    </div>
                </nav>
            </div> <!-- Photo pleine page -->
            <div class="wrapper">
                <div class="content">
                    <div class="text-content">
                        <h1>Page d'administration</h1>
                        <p>""</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
            <h2 class="btn_article"><a href="../public/index.php?route=add_Article">Ajouter un article</a></h2>
            <h2 class="btn_article"><a href="../public/index.php?route=register">Inscription</a></h2>  
        </div>
        <div class="col-sm-12">
            <div id="bloc_page"> 
                <div  class = "card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                    <div  class = "card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                        <h2>Affichage tous les articles</h2> 
                    </div>
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
        </div>
        <div class="card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
            <div class="card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                <h2> Affichage tous les Commentaires </h2>
            </div>
            <?php
                if(isset($_SESSION['delet_comment'])){
                    echo "<span>".$_SESSION['delet_comment']."<span>";
                    unset($_SESSION['delet_comment']); 
                }
                ?> 
            <?php
                foreach ($comments as $comment)  {   
            ?>
            <p><strong><?= htmlspecialchars($comment['pseudo']);?></strong></p>
            <p><?= htmlspecialchars($comment['content']);?></p>
            <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
            <a href="../public/index.php?route=deletcomment&id=<?php echo $comment['id']?>&articleId=<?= htmlspecialchars($article['id']);?>">Supprimer le commentaire</a></br>
            <?php
            }
                
            ?>
        </div>
            <div  class = "card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                <div class="card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                    <h2> Commentaires à signalés par les membres </h2>
                </div>
                <div>
                <?php foreach ($commentflag as $comment) { ?>
                <?php
                    if(isset($_SESSION['flag_comment'])){
                        echo "<span>".$_SESSION['flag_comment']."</span>";
                        unset($_SESSION['flag_comment']); 
                    }
                    ?>
                        <p><strong><?= htmlspecialchars($comment['pseudo']);?></strong></p>
                        <p><?= htmlspecialchars($comment['content']);?></p>
                        <p>Posté le <?= htmlspecialchars($comment['createdAt']);?></p>
                        <p>Flag[ <?= htmlspecialchars($comment['flag']);?> ]</p>
                        <a href="../public/index.php?route=flagcomment&id=<?php echo $comment['id']?>&articleId=<?= htmlspecialchars($article['id']);?>">Flager</a></br>
                    <?php } ?>  
                </div>
            </div>
            <div id="contact" class="card m-5 p-4 shadow bg-white arrondi d-flex flex-column justify-content-center align-items-center">
                <h2>Contact</h2>
                <?php foreach ($contacts as $contact) {  ?>
                    <p><strong><?= htmlspecialchars($contact['name']);?></strong></p>
                    <p><?= htmlspecialchars($contact['message']); ?></p>
                    <p><?= htmlspecialchars($contact['email']);?></p>
                    <p>Posté le <?= htmlspecialchars($contact['createdAt']);?></p>
                    <a id="#contact" href="../public/index.php?route=deletmessage&contactid=<?= htmlspecialchars($contact['id']);?>">Supprimer le message</a>
                <?php } ?>  
            </div>
        <div>
            <a href="../public/index.php">Retour à l'accueil</a>
        </div>
    </body>
</html>