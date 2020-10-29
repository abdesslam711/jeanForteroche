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
        <div >
            <div class="col-sm-8" >
                <?php
                if(isset($_SESSION['erreur_connexion'])){
                        echo "<span>".$_SESSION['erreur_connexion']."<span>";
                        unset($_SESSION['erreur_connexion']); 
                    }
                ?>
                <h1>Connexion</h1>
                <div">
                    <form method="post" action="../public/index.php?route=login">
                        <label for="pseudo">Pseudo</label><br>
                        <?php 
                            if(isset($_SESSION['erreur_pseudo'])){
                                echo "<span>".$_SESSION['erreur_pseudo']."<span>";
                                unset($_SESSION['erreur_pseudo']); 
                            }
                            ?>
                        <input class="form-control" type="text" id="pseudo" name="pseudo"><br>
                        <label for="password">Mot de passe</label><br>
                        <input class="form-control" type="password" id="password" name="password"><br>
                        <input class="btn btn-primary"  type="submit" value="Connexion" id="submit" name="submit">
                    </form>
                    <a href="../public/index.php">Retour à l'accueil</a>
                    <?php 
                    /*if(isset($_SESSION['erreur_pseudo'])){
                        echo "<span>".$_SESSION['erreur_pseudo']."<span>";
                        unset($_SESSION['erreur_pseudo']); 
                    }*/
                    ?></br>
                </div>
            </div>
        </div>
    </body>
</html>