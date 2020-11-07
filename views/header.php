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
        <header>
            <div class="haut_page">
                <div id="image_de_fond">
                    <img src="../public/images/fond.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="figcaption">
                    <h1>Bienvenue sur le site officiel de Jean Forteroche</h1>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="top_menu">
                    <a class="navbar-brand" href="index.php">JEAN FORTEROCHE</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="home.php">Blog</a>
                        <a class="nav-item nav-link" href="public/index.php?route=writer_file.php">Qui suis-je ?</a>
                        <a class="nav-item nav-link" href="contact.php">contact</a>
                        <a href="../public/index.php?route=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Connexion</a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="firt_publication">
            <h3>Dernière publication</h3>
        </div>
    </body>
</html>