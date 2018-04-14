<?php 

require_once "inc/header.php";

require_once "inc/functions.php";

?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('https://picsum.photos/1900/1265/?random')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Super blog</h1>
              <span class="subheading">Plein de beaux et passionnants articles à lire sur tout et rien</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          <?php 
          // Connexion à la base de données
          require_once ('inc/db.php');

          // On affichera 5 articles par page
          $articlesBypageId = 5;

          // Identification du nombre d'articles écrits
          $req = $pdo->query('SELECT COUNT(id) FROM articles');
          $result = $req->fetch(PDO::FETCH_ASSOC);
          $articlesNb = $result['COUNT(id)'];
          
          // Calcul du nombre de pages nécessaire en utilisant ceil() qui convertit un nombre décimal à l'entier supérieur
          $pagesNb = ceil($articlesNb / $articlesBypageId);

          // Utilisation d'un paramètre du paramètre d'url pageId pour savoir sur quelle page on est
          if(isset($_GET['pageId']) AND is_numeric($_GET['pageId']) AND $_GET['pageId'] <= $pagesNb AND $_GET['pageId'] > 0){
            $pageId = $_GET['pageId'];
          } 
          else {
            $pageId = 1;
          }

          // Calcul de l'offset
          $offset = ($pageId - 1) * $articlesBypageId;

          // Requête à la base de données pour afficher les articles sur la page
          $req = $pdo->query('SELECT articles.id, title, YEAR(date_publi) AS year, MONTH(date_publi) AS month, DAY(date_publi) AS day, content, Nom FROM articles INNER JOIN users ON articles.author = users.id ORDER BY date_publi DESC LIMIT ' . $offset . ',' .$articlesBypageId);
          $articles = $req->fetchAll(PDO::FETCH_ASSOC);

          // Affichage des articles
          foreach ($articles as $article) {
            ?>
            <div class="post-preview">
              <a href="article.php?articleId=<?= $article['id']; ?>">
                <h2 class="post-title">
                <?= $article['title']; ?>
                </h2>
              </a>
              <p class="post-meta">Par
                <a href="#"><?= $article['Nom']; ?></a>
                le <?= $article['day']; ?>/<?= $article['month']; ?>/<?= $article['year']; ?>
              </p>
            </div>
          <?php
          }
          ?>
          
          <!-- Pager -->
          <nav aria-label="Page navigation example">
              <ul class="pagination pagination-sm justify-content-center">
                <li class="page-item <?php if ($pageId == "1") { echo("disabled"); }?>">
                  <a class="page-link" href="index.php?pageId=<?= $pageId - 1 ?>"><i class="icon ion-ios-skipbackward"></i></a>
                </li>
                <?php
                for ($i=1; $i <= $pagesNb ; $i++) {
                  ?>
                  <li class="page-item <?php if ($pageId == $i) { echo("disabled"); }?>"><a class="page-link" href="index.php?pageId=<?= $i; ?>"><?= $i; ?></a></li>
                  <?php
                }
                ?>

                
                <li class="page-item <?php if ($pageId == $pagesNb) { echo("disabled"); }?>">
                  <a class="page-link" href="index.php?pageId=<?= $pageId + 1; ?>"><i class="icon ion-ios-skipforward"></i></a>
                </li>
              </ul>
            </nav>
        </div>
      </div>
    </div>

<?php require_once "inc/footer.php"; ?>