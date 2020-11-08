<?php

class ContactDAO extends DAO
{
   
    public function contact()
        {
            $sql = 'SELECT * FROM `contact` WHERE 1' ;
            $query = $this->createQuery($sql);
            $contacts = $query->fetchAll();
            
            return $contacts; 
        }

    public function insercontact()
    {
        if (isset($_POST["name"], $_POST["email"], $_POST["message"]) AND !empty($_POST["name"]) AND !empty($_POST["email"]) AND !empty($_POST["message"]))
                {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
            
                $sql = 'INSERT INTO contact (name, email, message, createdAt) VALUES (?, ?, ?, NOW())';
                
                return $this->createQuery($sql,[$name, $email, $message]);
                
            }

    }
    public function deletmessage($contactid)
    {
        $sql = 'DELETE FROM contact WHERE id = ?';
        $this->createQuery($sql, [$contactid]);
    }

}