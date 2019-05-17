<?php

require('model/dataBaseConnexion.php');
require('model/postsManager.php');
require('model/posts.php');
require('model/commentsManager.php');
require('model/Comments.php');
require('model/dashboardManager.php');

class Controller 
{
    // Fonctions de contrôle des différents types de pages
    private $db;

    private $dashboardManager;

    private $postsManager;

    public function __construct() 
    {
        $this->db = DatabaseConnexion::getDataBaseConnexion();
        $this->dashboardManager = new dashboardManager($this->db);
        $this->postsManager = new PostsManager($this->db);
        $this->commentsManager = new CommentsManager($this->db);
    }

    public function homeController() 
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        return include('view/home.php');
    }

    public function postController($id) 
    {
        $post = $this->postsManager->getOnePost($id, 'posts');
        $this->commentsManager->getAllCommentsByPost($post ,$id, 'comments');
        return include('view/show.php');
    }

    public function errorController() 
    {
        return include('view/error.php');
    }

    public function contactController()
    {
        return include('view/contact.php');
    }

    // Fonctions de contrôle de connexion au dashboard et de mise en session de l'administrateur

    public function connexionController() 
    {
        if(!empty($_POST['password']) && !empty($_POST['login']) && isset($_POST['login']) && isset($_POST['password'])) {
            $result = $this->dashboardManager->verifyConnexion($_POST['login'], $_POST['password']);
            if ($result == false) {
                echo 'Mauvais identifiant ou mot de passe rentré';
            } else {
                $allPosts = $this->postsManager->getAllPosts('posts');
                $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
                return include('view/dashboard.php');
            }
            
        }
        return include('view/connexionDashboard.php');
    }

    public function noLoginNeeded()
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        return include('view/dashboard.php');
    }

    // Fonctions en lien avec le dashboard

    public function reportThisComment($commentId, $postId)
    {
        $this->commentsManager->reportedComment($commentId);
        header('Location: index.php?article=' .$postId);
    }

    public function addThisComment($postId, $author, $comment)
    {
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            if(!empty($_POST['author']) && !empty($_POST['comment'])) {
                $affectedLines = $this->commentsManager->addComment($postId, $author, $comment);
                if($affectedLines === false) {
                    die('Impossible d\'ajouter ce commentaire !');
                } else {
                    header('Location: index.php?article=' . $postId);
                }
            } else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        } else {
            echo 'Erreur : aucun identifiant de chapitre envoyé !';
        }
    }

    public function deleteThisComment($id) 
    {
        $this->dashboardManager->deleteThisReportedComment($id);
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        header('Location: index.php?connexion');
    }

    public function keepThisComment($id) 
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        $this->dashboardManager->keepThisReportedComment($id);
        header('Location: index.php?connexion');
    }

    public function deleteThisPost($id)
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        $this->dashboardManager->deletePost($id);
        header('Location: index.php?connexion');
    }

    public function updateThisPost($id, $content, $title)
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        $this->dashboardManager->updatePost($id, $content, $title);
        header('Location: index.php?connexion');
    }

    public function addThisPost($content, $title) 
    {
        $allPosts = $this->postsManager->getAllPosts('posts');
        $reportedComments = $this->dashboardManager->getAllReportedComments('comments');
        $this->dashboardManager->addPost($content, $title);
        header('Location: index.php?connexion');
    }

}