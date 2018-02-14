<?php session_start();

    if (! Isset ($_SESSION[user]))
    {
        header("Location:erro.php");
    }
    elseif (! Isset ($_COOKIE[bolacha]))
    {
        header("Location:erro.php");
    }
    else
    {
        echo '<html>
                <head>
                        <link rel="stylesheet" type="text/css" href="entradacss.css">
                        <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="scripts.js" type="text/javascript"></script>
                        <title>Página Inicial</title>
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
                    <section>
                    <div class="imgs">
                      <img class="img1" src="Imagens/img1.jpg" alt="">
                      <img class="img2" src="Imagens/img2.jpg" alt="">
                      <img class="img3" src="Imagens/img3.jpg" alt="">
                    </div>
                    </section>
                </body>
             </html';
    }


?>
