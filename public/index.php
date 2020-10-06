<?php

require '../vendor/autoload.php';
require '../src/controller/controller.php';
 
try{
    if(isset($_GET['route'])){ 
        switch ($_GET['route']){
            case 'single';
                displaySingle();
                break;
            case 'add_Article';
                displayarticle();  
                break;
            case 'add_comment';
                displaycomment();  
                break;
            case 'edit_Article';
                afficher_form_modif();
                break;
            case 'send_article';
                modifier_article();
                break;
            case 'deletarticle';
                delet_article();
                break; 
            case 'deletcomment';
                delet_comment();
                break; 
            case 'flagcomment';
                flag_comment();
                break;
            case 'register';
                Inscription_login();
                break;
            case 'login';
                connexion_login();
                break; 
            default:
                echo 'page inconnue';
                break;
        }
    }else{
        displayHome();
    }
}catch (Exception $e)
    {
        echo 'Erreur'.$e->getMessage();
    }
