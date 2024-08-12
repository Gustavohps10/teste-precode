<?php $this->layout('../layouts/default', ['title' => 'Teste Dev Jr Precode']) ?>

<?php $this->start('meta') ?>
<link rel="stylesheet" href=<?= url("src/views/assets/styles/success.css") ?>>
<?php $this->stop() ?>

<main>
    <div class="success-animation">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
        </svg>
    </div>

    <span>Uhuul! Produto Cadastrado com sucesso.</span>
    <a class="button button-primary" href="<?= $router->route('app.home') ?>">Voltar para home</a>
</main>