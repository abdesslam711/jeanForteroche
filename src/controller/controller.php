<?php
//On inclut le fichier dont on a besoin (ici à la racine de notre site)
require '../src/DAO/DAO.php';
//On ajouter le fichier de model Article.php
require '../src/DAO/ArticleDAO.php';
//On ajouter le fichier de model Comment.php
require '../src/DAO/CommentDAO.php';
//On ajouter le fichier de model user.php
require '../src/DAO/userDAO.php';

function displayHome()
{
	/*on recupére tous nos article*/
	$article = new ArticleDAO();
	$articles = $article->getArticles();
	require '../views/home.php';
}
function displaySingle()
{
	//On recupere l'articles qu'on veut afficher grace l'attribut (GET)
	$article = new ArticleDAO();
	$articles = $article->getArticle($_GET['articleId']);
	// On récupérer tous les commentaires associés à l'article
	$comment = new CommentDAO();
	$comments = $comment->getCommentsFromArticle($_GET['articleId']);
	require '../views/single.php';	
}
function displayarticle()
{
	$articleDAO = new ArticleDAO();
	$articleDAO->add_article();
	require '../views/add_Article.php';
}

function  displaycomment()
{
	$CommentDAO = new CommentDAO();
	$CommentDAO->add_comment();
	$_SESSION['erreur_commentaire'] = "<span style=color:green>votre commentaire à bien été posté.</span>"; 
	require '../views/add_comment.php';
}
function afficher_form_modif()
{
	if (isset($_GET['articleId']) && intval($_GET['articleId']) > 0) {
		//On recupere l'articles qu'on veut modifier grace l'attribut (GET)
		$articleDAO = new ArticleDAO();
		$article = $articleDAO->getArticle($_GET['articleId']);
		// on recupere le formulaire qui qui permet de modifier 
		//les information de l'article 
		require '../views/edit_Article.php';
	} else {
		echo $erreur = "la page demander elle n'existe pas ";
	}
}
function modifier_article()
{
	if (isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["author"])) {
		if (!empty($_POST["title"]) && !empty($_POST["content"]) && !empty($_POST["author"])) {
			$articleDAO = new ArticleDAO();
			$article = $articleDAO->edit_Article($_POST, $_GET['articleId']);
		} else {
			displayHome();
		}
	}
}
function delet_article()
{
	if (isset($_GET['articleId']) && intval($_GET['articleId']) > 0) {
		//On recupere l'articles qu'on veut supprimer 
		$articleDAO = new ArticleDAO();
		$article = $articleDAO->deletarticle($_GET['articleId']);
		header('Location: ../public/index.php');
	} else {
		displayHome();
	}
}
function signale_comment()
{
	// On récupérer tous les commentaires associés à l'article pour les signaler.
	$commentDAO = new CommentDAO();
	$comments = $commentDAO->signalcomment();

}
function flag_comment()
{
	$comment = new CommentDAO();
	$comments = $comment->flagcomment();
	
	echo $erreur = 'le commentaire a été signalé!' ;	
}
function delet_comment()
{
	//On recupere le commentaire qu'on veut supprimer
	if (isset($_GET['id']) && intval($_GET['id']) > 0) {
		$comment = new CommentDAO();
		$comments = $comment->deletcomment($_GET['id']);
		displaySingle();
	} else {
		displayHome();
	}
}
function Inscription_login()
{
	$userDAO = new UserDAO();
	$userDAO->register();
	require '../views/register.php';
}
function connexion_login()
{
	$userDAO = new UserDAO();
	$userDAO->login();
	$_SESSION['admin_connexion'] = "<span >Bienvenu dans votre compte.</span>";
	require '../views/login.php';
}
function get_comment()
{
	$comment = new commentDAO();
	$comments = $comment->get_comment();
	require '../views/admin.php';
}
function page_admin()
{
	
	$articleDAO = new ArticleDAO();
	$articles = $articleDAO->getArticles();
	// On récupérer tous les commentaires associés à l'article
	$commentDAO = new CommentDAO();
	$comments = $commentDAO->get_comment();
	// On récupérer tous les commentaires associés à l'article pour les flager
	$comment = new commentDAO();
	$commentflag = $comment->comment_for_flaged();
	
	//
	$articleDAO->administration();
	require '../views/admin.php';
}



