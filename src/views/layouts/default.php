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
    <title><?= $this->e($title) ?></title>
</head>

<body>
    <header class="header">
        <div class="logo"><img src=<?= url("src/views/assets/images/precode-logo.png") ?> alt=""></div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li class="active"><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Github</a></li>
            </ul>
        </nav>
    </header>


    <?= $this->section('content') ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>