<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="entradacss.css">
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts.js" type="text/javascript"></script>
</head>
<body style="background: url(Imagens/loginbg.jpg)">
        <div class="login">
            <form method="POST" enctype="multipart/form-data" action="cod.php" target="_parent">
              <img style="float: left; margin-bottom: 1em;" src="Imagens/imglogo.png" alt="">
                <input class="input" name="username" type="text" maxlength="30" placeholder="Username"><br><br><br>
                <input class="input" name="password" type="password" maxlength="30" placeholder="Palavra-Passe">
                <input name="secure" type="hidden" size="20" value="1"><br><br>
                <input class="btlogin" name="Entrar" type="submit" value="Iniciar Sessão"><br><br>
                <span>Não tem conta?</span><a style="text-decoration: none; color: #005da6;" href="register.php" > Registe-se!</a><br>
                <span>Esqueceu-se da palavra-passe?</span><a style="text-decoration: none; color: #005da6;" href="#" > Recupere aqui!</a>
                </form>
        </div>
</body>
</html>
