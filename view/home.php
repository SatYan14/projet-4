<!doctype html>
<html lang="en">
  <head>
    <title>Blog de Jean Forteroche</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/normalize.css">
  </head>
  <body>
      
        <div class="parallax">
            <div class="shadow">
              <span id="title-shadow"><h1>Un billet simple pour l'Alaska</h1></span>
        </div>
      </div>

    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Mon blog de lecture</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Tous les chapitres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?contact">Me contacter</a>
          </li>
        </ul>

      </div>
    </nav>

    <div class="container">
      <div class="row">
      <?php $count = count($allPosts); ?>
      <?php foreach ($allPosts as $onePost) : ?>
        <div class ="col-xs-12 col-md-6 col-lg-4">
        <div class="card text-center text-white bg-dark ">
        <div class="card-header">
          Chapitre <?= $count; ?>
        </div>
        <div class="card-body">
        <h5 class="card-title"><?= $onePost->getTitle();?></h5>
        <p class="card-text"><?= $onePost->getResume();?></p>
        <a href="<?= 'index.php?article=' . $onePost->getId();?>" class="btn btn-warning">Lire la suite</a>
        </div>
        <div class="card-footer text-muted">
        <?= $onePost->getDate();?>
        </div>
        </div>
         </div>
         <?php $count--;?>
         <?php endforeach;?>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>