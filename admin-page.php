<?php
  session_start();
  include 'includes/classes.php';
  if(isset($_SESSION['user'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $post = new Post();
      $set = $post->set_data();
      $result = $post->createPost($set);
      header('Location: /bulle/admin-page.php');
    }

  } else {
      header('Location: /bulle/admin-login.php');
    }

  if(isset($_SESSION['user'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $type = new Type();
      $set = $type->set_data();
      $result = $type->createType($set);
      header('Location: /bulle/admin-page.php');
    }

  } else {
      header('Location: /bulle/admin-login.php');
    }


  if(isset($_SESSION['user'])) {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $admin = new Admin();
      $set = $admin->set_data();
      $result = $admin->createAdmin($set);
      header('Location: /bulle/admin-page.php');
    }
  } else {
      header('Location: /bulle/admin-login.php');
    }

?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Librarie Bulle</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/3755b175fd.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div id="containerAdmin">
        <div id="headerAdmin">
          <div id="logo-wrapper">
            <a href="admin-page.php"><img src="images/logo.png"></a>
          </div>

          <header>
            <h1 id="espace-bis">L'ESPACE ADMIN</h1>
          </header>
        </div>

        <main id="mainAdmin">
          <nav>
            <ul id="menuWrapperAdmin">
              <li><a href="#" id="toPost">Creer Post</a></li>
              <li><a href="#" id="posts">Tout les Post</a></li>
                <div id="subMenuPost">
                  <?php
                    $type = new Type();
                    $typeId;
                    $typeName;
                    $options = $type->getType();
                    foreach($options as $option) {
                      $show = "showPost(this.value)";
                      $typeName = $option['type'];
                      $typeId = $option['type_id'];
                      echo '<li class="subPost" value="'.$typeId.'" onclick="'.$show.'">'.$typeName.'</li>';
                      }
                  ?>
                </div>
              <li><a href="#" id="createCategory">Creer Category</a></li>
              <li><a href="#" id="allCategories" onclick="showCategory()">Tout les category</a></li>
              <li><a href="#" id="letterBox" onclick="showInbox()">Inbox</a></li>
              <li><a href="#" id="res" onclick="showRes()">Reservations</a></li>
              <li><a href="#" id="createAdmin">Creer Admin</a></li>
              <li><a href="#" id="allAdmin" onclick="showAdmin()">Gerer L'admin</a></li>
              <li><a href="#" >Bulle</a></li>
              <li><a href="deconnexion.php" onclick="">Deconnexion</a></li>
            </ul>

            <a href="javascript:void(0);" id="barIcon">
              <i class="fas fa-bars"></i>
            </a>
          </nav>

          <section id="dashboard">
              <h2 id="welcome"> Bonjour et bienvenue <?php  echo $_SESSION['user']; ?> sur le site d'admin l'espace bulle</h2>
              <section id="miniBoard">
                <section class="cardAdmin">
                  <h1 class="title">DEDICACES</h1>
                  <div class="items-wrapperAdmin">
                    <?php
                    $dedicace = new Posted();
                    $results = $dedicace->getPosts(4);
                    foreach($results as $result) {
                      $link = $result['img_link'];
                      echo '<div class="itemAdmin">';
                      echo '<img src="'.$link.'">';
                      echo '</div>';
                    }
                    ?>
                  </div>

                  <button class="btn"><a href="dedicaces.php">Voir tout</a></button>
                </section>

                <section class="cardAdmin">
                  <h1 class="title">DESSINS ORIGINAUX</h1>
                  <div class="items-wrapperAdmin">
                    <?php
                    $dessine = new Posted();
                    $results = $dessine->getPosts(2);
                    foreach($results as $result) {
                      $link = $result['img_link'];
                      echo '<div class="itemAdmin">';
                      echo '<img src="'.$link.'">';
                      echo '</div>';
                    }
                    ?>
                  </div>

                  <button class="btn"><a href="dedicaces.php">Voir tout</a></button>
                </section>

                <section class="cardAdmin">
                  <h1 class="title">FIGURINES ET OBJETS</h1>
                  <div class="items-wrapperAdmin">
                    <?php
                    $fig = new Posted();
                    $results = $fig->getPosts(3);
                    foreach($results as $result) {
                      $link = $result['img_link'];
                      echo '<div class="itemAdmin">';
                      echo '<img src="'.$link.'">';
                      echo '</div>';
                    }
                    ?>
                  </div>

                  <button class="btn"><a href="dedicaces.php">Voir tout</a></button>
                </section>

                <section class="cardAdmin">
                  <h1 class="title">AFFICHES ET SERIGRAPHES</h1>
                  <div class="items-wrapperAdmin">
                    <?php
                    $affiche = new Posted();
                    $results = $affiche->getPosts(1);
                    foreach($results as $result) {
                      $link = $result['img_link'];
                      echo '<div class="itemAdmin">';
                      echo '<img src="'.$link.'">';
                      echo '</div>';
                    }
                    ?>
                  </div>

                  <button class="btn"><a href="dedicaces.php">Voir tout</a></button>
                </section>
              </section>

                <section id="table">

                </section>


                <section id="editor">
                  <form action="#" method="post" enctype="multipart/form-data" id="postForm">
                    Titre <input type="text" name="titre"><br>
                    <br>
                    Auteur <input type="text" name="auteur"><br>
                    <br>
                    Description<br>
                    <textarea name="description" rows="5" cols="33"></textarea><br>
                    <br>
                    Prix <input type="text" name="prix"><br>
                    <br>
                    Lieu <input type="text" name="lieu"><br>
                    <br>
                    Date <input type="date" name="date"><br>
                    <br>
                    Heure <input type="time" name="heure"><br>
                    <br>
                    Select image to upload:<br>
                    <br>
                      <input type="file" name="imgFile" id="imgFile"><br>
                    <br>
                    Category<br>
                    <br>
                    <select name="typeId">
                      <option value="">--Please choose an option--</option>
                      <?php
                      $types = new Type;
                      $options = $types->getType();
                        foreach($options as $option) {
                          $typeName = $option['type'];
                          $typeId = $option['type_id'];
                          echo '<option value="'.$typeId.'">'.$typeName.'</option>';
                        }
                      ?>
                    </select><br>
                    <br>
                    <button type="submit">Creer Post</button><br>
                    <br>
                  </form>
                  <button id="cancel">Cancel</button>

                  <form action="#" method="post" id="categoryForm">
                    Nom de category <input type="text" name="type"><br>
                    <br>

                    <button type="submit">Creer category</button><br>
                    <br>
                  </form>
                  <button id="cancel2">Cancel</button>

                  <form action="#" method="post" id="adminForm">
                    Nom<input type="text" name="nom"><br>
                    <br>
                    Username<input type="text" name="username"><br>
                    <br>
                    Password<input type="password" name="password"><br>
                    <br>

                    <button type="submit">Creer Admin</button><br>
                    <br>
                  </form>
                  <button id="cancel3">Cancel</button>

                </section>
              </section>

        </main>



        <footer>
          Copyright &copy; Librairie Bulle 2021
        </footer>

      </div>

      <script type="text/javascript" src="script.js"></script>
    </body>
  </html>
