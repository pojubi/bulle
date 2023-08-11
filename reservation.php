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
      <div id="container">
        <header>
          <h1 id="espace-bis">L'ESPACE BIS</h1>
        </header>

        <nav>
          <div id="logo-wrapper">
            <a href="index.php"><img src="images/logo.png"></a>
          </div>

          <ul id="menuWrapper">
            <li><a href="">Commander</a></li>
            <li><a href="">Bulle</a></li>
            <li><a href="">Bulle Editeur</a></li>
            <li><a href="">Evenements</a></li>
            <li><a href="dedicaces.php">Dedicaces</a></li>
            <li><a href="dessins-originaux.php">Dessins originaux</a></li>
            <li><a href="affiches-serigraphes.php">Affiches et serigraphes</a></li>
            <li><a href="figurines-objets.php">Figurines et objets</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

          <a href="javascript:void(0);" id="barIcon">
            <i class="fas fa-bars"></i>
          </a>
        </nav>

        <main>
          <section id="editor">
            <h1 id="title">Formulaire de réservation</h1>
            <form action="res.php" method="post" id="reservationForm">
                nom <input type="text" name="nom"><br>
                <br>
                prenom <input type="text" name="prenom"><br>
                <br>
                nombre de place <input type="number" name="numPlace"><br>
                <br>
                evennement<br>
                <select name="postId">
                    <option value="">--Please choose an option--</option>
                    <?php
                        include 'includes/classes.php';
                        $post = new Posted();
                        $postId;
                        $options = $post->getPosts(4);
                        foreach($options as $option) {
                            $titre = $option['titre'];
                            $postId = $option['post_id'];
                            echo '<option value="'.$postId.'">'.$titre.'</option>';
                        }
                    ?>
                </select><br>
                <br>
                telephone <input type="tel" name="tel"><br>
                <br>
                <br>
                email <input type="email" name="email"><br>
                <br>
                <button type="submit">Envoyer</button><br>
            </form>
          </section>
        </main>

        <footer>
          Copyright &copy; Librairie Bulle 2021
        </footer>
      </div>

      <script src="script.js"></script>
    </body>
  </html>
