<?php require_once "inc/header.php";

require_once "inc/functions.php"; 

// Connexion à la base de données
require_once("inc/db.php");

if (!empty($_GET) AND is_numeric($_GET["articleId"])) {
  // On effectue la requête à la base pour récupérer l'article
  $req = $pdo->prepare('SELECT articles.id, title, date_publi, content, Nom FROM articles INNER JOIN users ON articles.author = users.id  WHERE articles.id = :article');
  $req->bindValue(':article', $_GET["articleId"]);
  $req->execute();
  $result = $req->fetchAll(PDO::FETCH_ASSOC);

  // Affichage des articles
  foreach ($result as $article) {
    ?>
      <!-- Page Header -->
      <header class="masthead" style="background-image: url('https://picsum.photos/1900/1265/?random')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?= $article['title']; ?></h1>
                <span class="meta">Par
                  <a href="#"><?= $article['Nom']; ?></a> le <?= $article['date_publi']; ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <p><?= $article['content']; ?></p>
            </div>
          </div>
        </div>
      </article>
    <?php
  }
} else {
    echo "Un problème est apparu";
  }

require_once "inc/footer.php"; ?>