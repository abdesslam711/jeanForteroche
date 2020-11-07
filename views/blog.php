<!-- Liste des articles du blog -->
<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/blog.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Blog Jean Forteroche</title>
    </head>
    <body>
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
                            <a href="../public/index.php?route=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Connexion</a>
                                <!--<a class="nav-link" href="/contact">Contact</a>-->
                            </li>		
                        </ul>
                    </div>
                </nav>
            </div> <!-- Photo pleine page -->
            <div class="wrapper">
                <div class="content">
                    <div class="text-content">
                        <h1>Le Blog</h1>
                        <p>"Toujours aussi proche de ses lecteurs et à leur écoute, Jean Forteroche a décidé cette année de publier son livre directement en ligne, en offrant à ses fans un nouveau chapitre par semaine. Ne manquez donc pas le fil des aventures de ses personnages, et plongez dès à présent dans le monde du mystère et des découvertes !"</p>
                    </div>
                </div>
            </div>
            <!-- Flèche avec effet smoothScroll -->
            <div class="drop-down">
                <div id="down"></div>
                <a href="#down" aria-label="Flêche vers le bas"><i class="fas fa-angle-down fa-3x"></i></a>
            </div>
        </header>
        <div class="container" role="main">
            <div class="row mt-4">
            <?php
                foreach ($articles as $article ) {
                ?>
                <div id="list"></div>
                <!-- Récupération et construction des articles sur la page -->
                <div class="container mt-4 p-4">
                    <article>
                        <h2><?= htmlspecialchars($article['title']);?></a></h2>  
                        <p><?= htmlspecialchars($article['content']);?></p>
                        <p><?= htmlspecialchars($article['author']);?></p>
                        <a href="../public/index.php?route=single&articleId=<?= htmlspecialchars($article['id']);?>" class="btn btn-primary"><i class="fas fa-book-open"></i> Lire</a>
                    </article>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- Construction des liens de pagination -->
        <div aria-label="Page publications">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="/blog/0#list" aria-label="Precedent">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Precedent</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="/blog/1#list">1</a></li>
                <li class="page-item"><a class="page-link" href="/blog/2#list">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="/blog/2#list" aria-label="suivant">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">suivant</span>
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        <!-- inclusion du footer -->
        <footer role="contentinfo">
            <!-- Liens du site -->
            <div class="row" id="footer_links">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center mt-5 pt-4">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/about">Qui suis-je ?</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <!-- Réseau sociaux -->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex flex-column align-items-center mb-5">
                    <h3 class="pl-5 h6">Suivez moi sur:</h3>
                    <ul>
                        <li><a href="#"><img src="/public/img/facebook-icon.png" alt="icone facebook"></a></li>
                        <li class="pl-3"><a href="#"><img src="/public/img/instagram-icon.png" alt="icone instagram"></a></li>
                        <li class="pl-3"><a href="#"><img src="/public/img/Twitter-icon.png" alt="icone twitter"></a></li>
                    </ul>
                </div>
            </div>
            <!-- Copyright -->
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center mt-4">
                    <p><small>&copy; 2020 - Tout droits réservés / Site réalisé par Abdesslam Bouzaroura </small></p>
                </div>
            </div>
        </footer>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/js/blog.js"></script>
    </body>
</html>