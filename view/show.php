<!doctype html>
<html lang="en">
  <head>
    <title><?= $post->getTitle() ;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styleshow.css">
    <link rel="stylesheet" href="public/css/normalize.css">
  </head>
  <body>
    

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
<div class="shadow-post">
<div class="wrapper">
    <h1> <?= $post->getTitle() ;?></h1>
    
    <div class="content">
        <?= $post->getContent() ;?>
    </div>
</div>
</div>
        

        
    </div>
    <footer>
        

        <div class="container">
            <form action="index.php?addComment&amp;id=<?= $_GET['article'] ?>" class="col-lg-6" method="post">
            <legend>Un commentaire ?</legend>
                <div class="form-group">
                    <label for="author">Votre nom</label> 
                    <input type="text" id="author" placeholder="Votre nom" class="form-control" name="author" required>
                
                </div>

                <div class="form-group">
                    <label for="comment">Votre commentaire</label>
                    <textarea  id="comment" cols="30" rows="10" placeholder="Veuillez indiquer votre commentaire" class="form-control" name="comment" required></textarea>
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-dark">Envoyez</button>
                </div>

            
            </form>
        </div>

        <div class="container">
            <ul class="list-group">
            <?php foreach ($post->getComments() as $oneComment) : ?>
                <li class="list-group-item flex-comments list-group-item-dark"><strong class="name"><?= $oneComment->getAuthor(); ?> :</strong> <?= $oneComment->getComment(); ?> <a class ="report-link" href="index.php?reportComment&amp;commentId=<?= $oneComment->getId();?>&amp;postId=<?= $_GET['article']; ?>">Signaler</a></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>