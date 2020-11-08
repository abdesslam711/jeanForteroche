<?php
    class UserDAO extends DAO
    {
        public function register()
        {
            if (isset($_POST["pseudo"], $_POST["password"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["password"]) )
            {

                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];

                $sql = 'SELECT count(*) password FROM user WHERE pseudo = ?';
                $data = $this->createQuery($sql, [$_POST['pseudo']]);
                
                $nbuser = $data->fetchColumn();
                if($nbuser == 0 ){ 
                    $sql = 'INSERT INTO user (pseudo, password, createdAt, role_id) VALUES (?, ?, NOW(), ?)';
                    $this->createQuery($sql, [$_POST['pseudo'], password_hash($_POST['password'], PASSWORD_BCRYPT),1]);
                    print_r($_POST['pseudo']);
                    $_SESSION['erreur_inscription'] = "votre compte à bien été ajouté";   
                }else{
                    $_SESSION ['erreur_pseudo'] = "le pseudo existe déja";
                }
            }
        
        }
        public function login()
        {
            if(isset($_POST['submit'])){ 
                if (isset($_POST["pseudo"], $_POST["password"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["password"]) )
                    
                {
                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];

                    $sql = 'SELECT id, pseudo, role_id, password FROM user WHERE pseudo = ?';
                    
                    $data = $this->createQuery($sql, [$_POST['pseudo']]);
                    $result = $data->fetch();
                    if(isset($result['password']) &&  password_verify($_POST['password'], $result['password'])){ 
                        $_SESSION['user']=$result['pseudo'];
                        $_SESSION['role_id']=$result['role_id'];
                        header("Location:../public/index.php?route=administration"); 
                        
                    }else{
                        $_SESSION['erreur_pseudo'] = "pseudo ou mot de pass est inccorect."; 
                    }
                }
                else{
                    $_SESSION['erreur_pseudo'] = "tous les champs doivent être completes";
                }
            }
        }
        
    }
