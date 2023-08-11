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
            <li><a href="">Evenements</a></li>
            <li><a href="dedicaces.php">Dedicaces</a></li>
            <li><a href="dessins-originaux.php">Dessins</a></li>
            <li><a href="affiches-serigraphes.php">Affiches</a></li>
            <li><a href="figurines-objets.php">Figurines</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
  
          <a href="javascript:void(0);" id="barIcon">
            <i class="fas fa-bars"></i>
          </a>
        </nav>
  
        <main>
          <section id="editor">
            <h1 id="title">Formulaire de contact</h1>
            <form action="con.php" method="post" id="contactForm">
                nom <input type="text" name="nom"><br>
                <br>
                prenom <input type="text" name="prenom"><br>
                <br>
                email <input type="email" name="email"><br>
                <br>
                message<br>
                <br>
                <textarea name="message" rows="5" cols="33"></textarea><br>
                <br>
                telephone <input type="tel" name="tel"><br>
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

