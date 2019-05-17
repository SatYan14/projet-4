<!doctype html>
<html lang="en">
  <head>
    <title>Page de connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public/css/styleparticles.css">

    <link rel="stylesheet" href="public/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div id="particles-js">
        <div class="form-connexion">
            <div class="container">
                <form action="index.php?connexion" class="col-lg-12" method="post">
                <legend>Connexion au tableau de bord</legend>
                    <div class="form-group">
                        <label for="login">Votre identifiant</label>
                        <input type="text" id="login" placeholder="Votre identifiant" class="form-control" name="login">
                    </div>

                    <div class="form-group">
                        <label for="password" class="">Votre mot de passe</label> 
                        <input type="password" id="password" placeholder="Votre mot de passe" class="form-control" autocomplete="current-password" name="password">
                    
                    </div>
    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
    
                
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="public/js/particles.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>