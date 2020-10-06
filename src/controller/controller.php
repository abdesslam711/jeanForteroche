<?php
			//On inclut le fichier dont on a besoin (ici à la racine de notre site)
			require '../src/DAO/DAO.php';
			//On ajouter le fichier Article.php
			require '../src/DAO/ArticleDAO.php';
			//On ajouter le fichier Comment.php
			require '../src/DAO/CommentDAO.php';
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
			require '../views/add_comment.php';
		}
	function afficher_form_modif()
		{
			
			//On recupere l'articles qu'on veut modifier grace l'attribut (GET)
			$articleDAO = new ArticleDAO();
			$article = $articleDAO->getArticle($_GET['articleId']);
       		// on recupere le formulaire qui qui permet de modifier 
       		//les information de l'article 
			require '../views/edit_Article.php';
			
		}
		function modifier_article()
		{
			if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["author"]))
			{
				$articleDAO = new ArticleDAO();
				$article = $articleDAO->edit_Article($_POST, $_GET['articleId']);	
			}
			afficher_form_modif();
		}
		function delet_article()
		{
			//On recupere l'articles qu'on veut supprimer 
			$articleDAO = new ArticleDAO();
			$article = $articleDAO->deletarticle($_GET['articleId']);
			header('Location: ../public/index.php');	
		}
		function flag_comment()
		{
			$comment = new CommentDAO();
			$comments = $comment->flagcomment($_GET['articleId']);
		}
		
		function delet_comment()
		{
			//On recupere le commentaire qu'on veut supprimer
			$comment = new CommentDAO();
        	$comments = $comment->deletcomment($_GET['articleId']);
			displaySingle();
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
			require '../views/login.php';
		}
		
?>