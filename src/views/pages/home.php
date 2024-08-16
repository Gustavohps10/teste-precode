<?php $this->layout('../layouts/default', ['title' => 'Teste Dev Jr Precode']) ?>

<?php $this->start('meta') ?>
<link rel="stylesheet" href=<?= url("src/views/assets/styles/home.css") ?>>
<?php $this->stop() ?>

<main>
    <aside>
        <div class="presentation-text">
            <h2>Teste com PHP para <br> <span>Desenvolvedor Júnior</span></h2>
            <h3>By Gustavo Henrique</h3>
            <p>Cadastro de produto feito com PHP + HTML + CSS + JS e consultas no banco de dados PostgreSQL</p>
            <a href="<?= $router->route('products.create') ?>" class="button button-primary">
                <i data-lucide="package-plus"></i>
                Cadastrar Produto
            </a>
        </div>
    </aside>

    <div class="presentation-container">
        <img src=<?= url("src/views/assets/images/presentation.png") ?> alt="">
    </div>
</main>