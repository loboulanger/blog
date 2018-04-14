<?php require_once "inc/header.php"; ?>

<?php require_once "inc/functions.php"; ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://picsum.photos/1900/1265/?random')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Vous n'avez pas encore de compte ?</h1>
              <span class="subheading">Inscrivez-vous pour suivre vos auteurs préférés, commenter et archiver vos articles favoris.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputEmail">Nom :</label>
                                <input type="text" class="form-control" name="inputName" placeholder="Votre nom complet (ex. Paul Bismuth)">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1">Mot de passe :</label>
                                <input type="password" class="form-control" name="inputPassword1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="inputEmail">Email :</label>
                                <input type="email" class="form-control" name="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword2">Confirmation de mot de passe :</label>
                                <input type="password" class="form-control" name="inputPassword2">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">M'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>

<?php require_once "inc/footer.php"; ?>