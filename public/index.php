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
            case 'add_Article':
                displayarticle();
                break;
            case 'add_comment':
                displaycomment();
                break;
            case 'edit_Article':
                afficher_form_modif();
                break;
            case 'send_article':
                modifier_article();
                break;
            case 'deletarticle':
                delet_article();
                break;
            case 'deletcomment':
                delet_comment();
                break;
            case 'flagcomment':
                flag_comment();
                break;
            case 'register':
                if(isset($_SESSION['user'])){
                    Inscription_login();
                }else{
                    displayHome();
                }
                break;
            case 'login';
                if (isset($_SESSION['user'])) {
                    connexion_login();
                } else {
                    displayHome();
                }
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
