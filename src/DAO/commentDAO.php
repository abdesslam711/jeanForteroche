<?php

class CommentDAO extends DAO
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }

    public function add_comment()
        {
            if (isset($_POST["pseudo"]) AND isset($_POST["content"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["content"]) AND !empty($_POST["article_id"]))
                {
                
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $content = htmlspecialchars($_POST['content']);
                $article_id = htmlspecialchars($_POST['article_id']);

                $sql = 'INSERT INTO comment (pseudo, content, createdAt, flag, article_id) VALUES (?,?, NOW(),1,?)';
                
                return $this->createQuery($sql, array($pseudo, $content, $article_id));

            }
        }
        public function flagcomment($articleId)
        {
            $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
            $this->createQuery($sql, [1, $articleId]);
        }
        public function deletcomment($id)
        {
            $sql = 'DELETE FROM comment WHERE id = ?';
            $this->createQuery($sql, [$id]);
            
        }
        
}
 ?>

