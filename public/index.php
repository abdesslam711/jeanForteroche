<?php
session_start();
require '../vendor/autoload.php';
require '../src/controller/controller.php';

try {
    if (isset($_GET['route'])) {
        switch ($_GET['route']) {
            case 'single':
                displaySingle(); 
                break;
                case 'get_comment':
                    get_comment(); 
                    break;
                case 'about':
                    writer_file();
                    break;
                case 'contact':
                    contact_file();
                    break;
                case 'blog':
                    blog_file();
                    break;
            case 'add_Article':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1){
                    displayarticle();
                }else{
                    connexion_login();
                    $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            case 'add_comment':
                    displaycomment();
                break;
            case 'edit_Article':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1){ 
                    afficher_form_modif();
                }else{
                    connexion_login();
                    $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            case 'send_article':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1){ 
                    modifier_article();
                }else{
                    connexion_login();
                    $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            case 'deletarticle':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1){
                    delet_article();
                }else{
                    connexion_login();
                    $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            case 'deletcomment':
                delet_comment();
                break;
            case 'signalcomment':
                    signale_comment();
                    break;   
            case 'flagcomment':
                flag_comment();
                break;
            case 'register':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1){
                    Inscription_login();
                }else{
                    connexion_login();
                    $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            case 'login';
                    connexion_login();
                break;
            case 'administration':
                if (isset($_SESSION['user']) &&  $_SESSION['role_id'] == 1) {
                    page_admin();
                } else {
                   connexion_login();
                   $_SESSION ['erreur_connexion'] = "veuillez rentre votre pseudo et mot de pass pour connecté";
                }
                break;
            default:
                echo 'page inconnue';
                break;
        }
    } else {
        displayHome();
    }
} catch (Exception $e) {
    echo 'Erreur' . $e->getMessage();
}
