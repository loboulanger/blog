<?php require_once "inc/header.php"; ?>

<?php require_once "inc/functions.php"; ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://picsum.photos/1900/1265/?random')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Vous avez déjà un compte ?</h1>
              <span class="subheading">Connectez-vous pour accéder à votre page d'accueil personnalisée.</span>
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
                                <input type="email" class="form-control" placeholder="Adresse email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Mot de passe">
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label">Se souvenir de moi</label>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
                <div class="col-12 text-center">
                    <a href="#">Mot de passe oublié ?</a>
                </div>
            </div>
        </div>
      </div>

<?php require_once "inc/footer.php"; ?>