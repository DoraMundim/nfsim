<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NF sim</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="script.js"></script>
    <script>
        function validarPost () {
        if (grecaptcha.getResponse() != "") return true;
            alert('Selecione a caixa de "não sou um robô"');
            return false;
    }
    </script>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="nav-list">
            <div class="logo">
                <img src="./img/logo nfsim png 1.png" class="logo" alt="Logo NF sim">
            </div>
                <ul>
                    <li class="nav-item"><a href="principal.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="quemsomos.php" class="nav-link">Quem somos</a></li>
                    <li class="nav-item"><a href="nossosprodutos.php" class="nav-link">Nossos produtos</a></li>
                    <li class="nav-item"><a href="faq.php" class="nav-link">F.A.Q.</a></li>
                    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Gestão</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><img src="./img/Vector.png" class="icone"></a>
                    <ul class="dropdown">
                        <li class="nav-item"><a href="#" class="nav-link">Nfsim sistema</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sefácil sistema</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu-icon">
                <a href="#" onclick="menuShow()"><span class="material-symbols-outlined">Menu</span></a>
            </div>
        </nav>

            <div class="mobile-menu">
                <ul>
                    <li class="nav-item"><a href="principal.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="quemsomos.php" class="nav-link">Quem somos</a></li>
                    <li class="nav-item"><a href="nossosprodutos.php" class="nav-link">Nossos produtos</a></li>
                    <li class="nav-item"><a href="faq.php" class="nav-link">F.A.Q</a></li>
                    <li class="nav-item"><a href="contato.php" class="nav-link">Contato</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Gestão</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><img src="./img/Vector.png" class="icone"></a>
                    <ul>
                        <li class="nav-item"><a href="#" class="nav-link">Nfsim sistema</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Sefácil sistema</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
    </header>