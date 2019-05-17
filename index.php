<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('controller/controller.php');


$mainController = new Controller();


if(empty($_SERVER['QUERY_STRING'])) {
    $mainController->homeController();
}

else if(isset($_GET['contact'])) {
    $mainController->contactController();
}


else if(isset($_GET['article']) && !empty($_GET['article'])) {
    $titre = 'Mon titre';
    $article = $_GET['article'];
    $mainController->postController($_GET['article']);
}

else if(isset($_GET['connexion'])) {
    session_start();
    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
        return $mainController->noLoginNeeded();
    }  
    $mainController->connexionController();
}

else if(isset($_GET['reportComment'])) {
    if(isset($_GET['commentId']) && $_GET['commentId'] > 0) {
        if(isset($_GET['postId']) && $_GET['postId'] > 0) {
            $mainController->reportThisComment($_GET['commentId'], $_GET['postId']);
        } else {
            echo 'L\'article concerné est introuvable ou n\'existe pas';
        }
    } else {
        echo 'Le commentaire concerné est introuvable ou n\'existe pas';
    }
}

else if(isset($_GET['updateThisPost'])) {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        if(!empty($_POST['content']) && !empty($_POST['update-title'])) {
            $mainController->updateThisPost($_GET['id'], $_POST['content'], $_POST['update-title']);
        } else {
            echo 'Le contenu de votre chapitre est vide !';
        }
    } else {
        echo 'Aucun chapitre retourné';
    }
}

else if(isset($_GET['addComment'])) {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        if(!empty($_POST['author']) && !empty($_POST['comment'])) {
            $mainController->addThisComment($_GET['id'], $_POST['author'], $_POST['comment']);
        } else {
            echo 'Tous les champs ne sont pas remplis !';
        }
    } else {
        echo 'Aucun chapitre retourné !';
    }
}

else if(isset($_GET['deleteThisComment'])) {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $mainController->deleteThisComment($_GET['id']);
    } else {
        echo 'Ce commentaire est introuvable ou n\'existe pas !';
    }
}

else if(isset($_GET['keepThisComment'])) {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $mainController->keepThisComment($_GET['id']);
    } else {
        echo 'Ce commentaire est introuvable ou n\'existe pas !';
    }
}

else if(isset($_GET['deleteThisPost'])) {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $mainController->deleteThisPost($_GET['id']);
    } else {
        echo 'Ce chapitre est introuvable ou n\'existe pas !';
    }
}

else if(isset($_GET['addPost'])) {
    if(!empty($_POST['title']) && !empty($_POST['add-content'])) {
        $mainController->addThisPost($_POST['add-content'], $_POST['title']);
    }
}

else {
    $mainController->errorController();
}

