<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href=<?= url("src/views/assets/styles/global.css") ?>>
    <link rel="stylesheet" href=<?= url("src/views/assets/styles/header.css") ?>>
    <link rel="stylesheet" href=<?= url("src/views/assets/styles/footer.css") ?>>
    <link rel="stylesheet" href=<?= url("src/views/assets/styles/button.css") ?>>
    <title><?= $this->e($title) ?></title>
    <?= $this->section('meta') ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo"><img src=<?= url("src/views/assets/images/precode-logo.png") ?> alt=""></div>
            <nav>
                <ul>
                    <li><a href="<?= $router->route("app.home") ?>">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                    <li><a href="">Github</a></li>
                </ul>
            </nav>
            <i class="open-sidebar" onclick="openSidebar()" data-lucide="align-justify"></i>
        </div>
    </header>

    <div class="sidebar">
        <i class="close-sidebar" onclick="closeSidebar()" data-lucide="x"></i>
        <ul>
            <li><a href="#"><i data-lucide="house"></i>Home</a></li>
            <li><a href="#"><i data-lucide="info"></i>Sobre</a></li>
            <li><a href="#"><i data-lucide="phone"></i>Contato</a></li>
            <li><a href="#"><i data-lucide="github"></i>Github</a></li>
        </ul>
    </div>

    <div class="content">
        <?= $this->section('content') ?>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="social">
                <img src=<?= url("src/views/assets/images/precode-logo-white.png") ?>>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="about">
                <h2>A empresa</h2>
                <ul>
                    <li>
                        <a href="#">
                            <i data-lucide="chevron-right"></i>
                            <span>Marketplaces</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i data-lucide="chevron-right"></i>
                            <span>Soluções</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i data-lucide="chevron-right"></i>
                            <span>Clientes</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="utils">
                <h2>Links úteis</h2>
                <ul>
                    <li>
                        <a href="#">
                            <i data-lucide="chevron-right"></i>
                            <span>API REST</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact">
                <h2>Fale conosco</h2>
                <ul>
                    <li>
                        <i data-lucide="phone"></i>
                        <span>(44) 99999-9999</span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <i data-lucide="mail"></i>
                        <span>example@precode.com.br</span>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="container">
            <span class="copyright">Feito com ☕ por Gustavo Henrique © Copyright - 2024</span>
        </div>
    </footer>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <script src="<?= url("src/views/assets/scripts/header.js") ?>"></script>

    <?= $this->section('scripts') ?>
</body>

</html>