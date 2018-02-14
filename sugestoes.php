<html>
  <head>
    <link rel="stylesheet" type="text/css" href="entradacss.css">
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts.js" type="text/javascript"></script>
    <title>Sugestões</title>
  </head>
  <body style="background: url(Imagens/mainbg.jpg)">
    <header>
        <a href="main.php"><img src="Imagens/imglogo.png" alt="logo" class="logo"></a>
        <nav>
          <ul>
            <li><a href="main.php">Home</a></li>
            <li><a href="galo.php">Jogo Do Galo</a></li>
            <li><a href="como.php">Como Jogar</a></li>
            <li><a href="sugestoes.php">Sugestões</a></li>
            <li><a href="logout.php">Terminar Sessão</a></li>
          </ul>
      </nav>
    </header>
    <section class="S-Centro">
      <div class="Ajuda">
        <h1 class="title">Ajude-nos a melhorar! <span>Dê sugestões para melhorar o site!</span></h1>
      </div>
      <div class="Sugestao">
          <form method="POST" enctype="multipart/form-data" action="sugestoes.php" target="_parent">
              <input class="input" name="nome" type="text" maxlength="30" placeholder="Nome"><br><br><br>
              <input class="input" name="email" type="text" maxlength="30" placeholder="Email">
              <input class="sugerir" name="sugestao" type="text" maxlength="500" placeholder="Sugestão: ">
              <input class="btlogin" name="Enviar" type="submit" value="Enviar Sugestão"><br><br>

              </form>
      </div>
    </section>
  </body>
</html>
