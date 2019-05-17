<!doctype html>
<html lang="fr">
  <head>
    <!-- TinyMCE -->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        // init tinymce
tinymce.init({
  selector: "textarea",
  branding: false
});

// on modal show, focus the editor
$("#exampleModalCenter").on("shown.bs.modal", function() {
  
  tinyMCE.get("editor").focus();
});

        </script>
    <title>Tableau de bord</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="public/css/styledashboard.css">
  </head>
  <body>

    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Retour au blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#add">Ajouter un chapitre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#update">Modifier un chapitre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#delete">Supprimer un chapitre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#moderate">Modérer les commentaires</a>
          </li>
        </ul>

      </div>
    </nav>
      
    <div class="container">
    <div id="add" class="jumbotron">
      <h1 class="display-4" >Ajouter un chapitre</h1>
      <form action="index.php?addPost" method="post">
      <div class="form-group">
          <label for="title">Votre titre</label> 
          <input type="text" id="add-title" placeholder="Votre titre" class="form-control" name="title" required>
      </div>
      <textarea name="add-content" id="mytextarea" cols="30" rows="10"></textarea>
      <button type="submit" class="btn btn-dark" id="add-button">Ajouter</button>
      </form>
      <hr class="my-4">
  
    </div>
    </div>


    <div class="container">

      <div id="update" class="jumbotron">
        <h1  class="display-4">Modifier un chapitre</h1>
        <ul class="list-group">
          <?php $count = count($allPosts); ?>
          <?php foreach ($allPosts as $post) : ?>
          
          <li class="list-item"><h3>Chapitre <?= $count;?></h3>
          <a href="#"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter<?= $count; ?>">Modifier</button></a>
          
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter<?= $count; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modifier chapitre <?= $post->getId();?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                
                <form method="post" action="index.php?updateThisPost&amp;id=<?= $post->getId(); ?>">
                <div class="form-group">
                <input type="text" id="update-title" placeholder="" class="form-control" name="update-title" required value="<?= $post->getTitle();?>"> 
                </div>
                  <textarea id="mytextarea" name="content" cols="30" rows="10" ><?= $post->getContent();?></textarea>
                  
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-dark">Modifier</button>
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                </div>
                </form>
                </div>
                
              </div>
            </div>
          </div>
          <?php $count--; ?>
          <?php endforeach; ?> 
          
        </ul>
        <hr class="my-4">
        <p>Attention, toute modification est définitive !</p>
        
      </div>
    </div>
    
    <div class="container">
      <div id="delete" class="jumbotron">
        <h1 class="display-4">Supprimer un chapitre</h1>
        <ul class="list-group">
          <?php $count = count($allPosts); ?>
          <?php foreach ($allPosts as $onePost) : ?>

          <li class="list-item"><h3>Chapitre <?= $count; ?></h3>
            <p id="content-delete"><strong>Contenu : </strong><?= $onePost->getResume();?></p>
            <a href="index.php?deleteThisPost&amp;id=<?= $onePost->getId();?>"><button type="button" class="btn btn-dark">Supprimer</button></a>

          </li>
          <?php $count--; ?>
          <?php endforeach; ?>

        </ul>
        <hr class="my-4">
        <p>Attention, toute suppression est définitive !</p>
        
      </div>
    </div>

    <div class="container">
    <div id="moderate" class="jumbotron">
      <h1 class="display-4">Modérer les commentaires signalés</h1>
        <ul class="list-group">
        <?php foreach ($reportedComments as $oneReportedComment) : ?>
          <strong><li class="list-item comments-action"><?= $oneReportedComment->comment;?>
            <div class="btn-group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="index.php?keepThisComment&amp;id=<?= $oneReportedComment->id;?>">Garder le commentaire</a>
                <a class="dropdown-item" href="index.php?deleteThisComment&amp;id=<?= $oneReportedComment->id ;?>">Supprimer le commentaire</a>
                
              </div>
            </div>
          </li></strong>
      <?php endforeach; ?>
        </ul>
      <hr class="my-4">
      
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
  </body>
</html>