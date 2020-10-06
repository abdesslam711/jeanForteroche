<?php
    class UserDAO extends DAO
    {
        public function register()
        {
            if (isset($_POST["pseudo"], $_POST["password"]))
            {
                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];
                
                $sql = 'INSERT INTO user (pseudo, password, createdAt, role_id) VALUES (?, ?, NOW(), ?)';
                return  $this->createQuery($sql, [$_POST['pseudo'], password_hash($_POST['password'], PASSWORD_BCRYPT),1]);
                /*return $this->createQuery($sql,[$pseudo, $password]);*/
            }
        }
        public function login()
        {
            if (isset($_POST["pseudo"], $_POST["password"]))
            {
            $pseudo = $_POST['pseudo'];
            $password = $_POST['password'];

                $sql = 'SELECT id, password FROM user WHERE pseudo = ?';
                $data = $this->createQuery($sql, [$_POST['pseudo']]);
                $result = $data->fetch();
                $isPasswordValid = password_verify($_POST['password'], $result['password']);
                
            }
        }
    }
?>