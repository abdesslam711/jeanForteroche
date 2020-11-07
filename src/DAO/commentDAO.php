<?php

class CommentDAO extends DAO
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
    return $this->createQuery($sql, [$articleId]);
   
    }
    public function get_comment()
    {
        
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id AND flag = 1 ORDER BY article_id DESC ' ;
        $query = $this->createQuery($sql);
            $comments = $query->fetchAll();
            
            return $comments; 
    }
    public function add_comment()
        {
            if (isset($_POST["pseudo"]) AND isset($_POST["content"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["content"]) AND !empty($_POST["article_id"]))
                {
                
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $content = htmlspecialchars($_POST['content']);
                $article_id = htmlspecialchars($_POST['article_id']);

                $sql = 'INSERT INTO comment (pseudo, content, createdAt, flag, article_id) VALUES (?,?, NOW(),0,?)';
                
                return $this->createQuery($sql, array($pseudo, $content, $article_id));
                

            }
        }
    public function comment_for_flaged()
        {
            $sql ='SELECT id, pseudo, content, createdAt, flag, article_id FROM comment WHERE flag = 0';
            $query = $this->createQuery($sql);
                $commentflag = $query->fetchAll();
                
                return $commentflag; 
        }
    public function flagcomment()
        {
           
            $sql='UPDATE comment SET flag = 1 WHERE id= ?';
            $this->createQuery($sql,[intval($_GET['id'])]);
        }
    public function signalcomment()
        {
            $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id ORDER BY article_id DESC ' ;
            $query = $this->createQuery($sql);
            $comments = $query->fetchAll();
            return $comments; 
        }
    public function deletcomment($id)
        {
            $sql = 'DELETE FROM comment WHERE id = ?';
            $this->createQuery($sql, [$id]);
            
        }
        
}
 ?>

