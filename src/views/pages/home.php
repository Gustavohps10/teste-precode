<?php $this->layout('../layouts/default', ['title' => 'Teste Dev Jr Precode']) ?>

<?php $this->start('meta') ?>
<link rel="stylesheet" href=<?= url("src/views/assets/styles/home.css") ?>>
<?php $this->stop() ?>

<main>
    <aside>
        <div class="presentation-text">
            <h2>Teste com PHP para <br> <span>Desenvolvedor</span> Júnior</h2>
            <h3>By Gustavo Henrique</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, perferendis!</p>
            <a href=<?= $router->route('product.create') ?> class="button button-primary">
                <i data-lucide="package-plus"></i>
                Cadastrar Produto
            </a>
        </div>
    </aside>

    <div class="presentation-container">
        <img src=<?= url("src/views/assets/images/presentation.png") ?> alt="">
    </div>
</main>