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
                  <a href="index.php"><img src="images/logo.png"></a>
                </div>
        
                <header>
                  <h1 id="espace-bis">L'ESPACE ADMIN</h1>
                </header>
            </div>
            
            
      
            <main id="mainAdminLogin">
                <section id="editor">
                    <h3 id="welcome">
                        Bonjour et bienvenue sur le site d'admin l'espace bulle .
                        
                    </h3>
                    Vous devrez conneceter pour continuer. <br>
                    <br>
                    Vous avez votre identifiant et mot de passe ?<br>
                    <button id="oui">OUI, SE CONNECTER</button>
                    <br>
                    Sinon clicquer ci dessous pour aller sur l'espace-bis de librairie bulle.<br>
                    <button><a href="index.php">NON, ALLER A L'ESPACE-BIS</a></button>

                    
                </section>
                
                <form action="login.php" method="post" id="loginForm">
                  Identifiant <input type="text" name="username"><br>
                  <br>
                  Mot de passe <input type="password" name="password"><br>
                  <br>
                  <button type="submit">Connecter</button>
                </form>
              
            </main>
            
            <footer>
              Copyright &copy; Librairie Bulle 2021
            </footer>
          </div>
        </div>
        
        <script src="script.js"></script>
    </body>
  </html>