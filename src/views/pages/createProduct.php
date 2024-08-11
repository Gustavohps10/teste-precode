<?php $this->layout('../layouts/default', ['title' => 'Teste Dev Jr Precode']) ?>

<?php $this->start('meta') ?>
<link rel="stylesheet" href=<?= url("src/views/assets/styles/form.css") ?>>
<?php $this->stop() ?>

<div class="container">
    <form action="<?= $router->route("products.store"); ?>" method="post" autocomplete="off" novalidate>
        <div class="form-header">
            <h2>Registro de Produto</h2>
            <h3>Cadastre seu produto no formulário abaixo.</h3>

            <div class="tabs">
                <div id="tabMain" class="tab active" onclick="openSection('main', 'tabMain')">Principal</div>
                <div id="tabVariations" class="tab" onclick="openSection('variations', 'tabVariations')">Variações</div>
            </div>
        </div>

        <hr>

        <div class="form-body">
            <?php
            if (isset($error)): ?>
                <div class="error-container">
                    <i data-lucide="shield-alert"></i>
                    <?= $error["message"] ?>
                </div>
            <?php endif ?>

            <section id="main">
                <h2>Informações principais</h2>
                <br>

                <div class="input-box">
                    <label for="sku">SKU do produto pai (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="barcode"></i>
                        <input id="sku" name="sku" type="number" maxlength="10" value="<?= $data["sku"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="name">Título do produto (obrigatório)</label>
                    <div class="text-input">
                        <i data-lucide="package"></i>
                        <input id="name" name="name" type="text" value="<?= $data["name"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="shortName">Título curto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="package"></i>
                        <input id="shortName" name="shortName" type="text" value="<?= $data["shortName"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="description">Descrição detalhada do produto (obrigatório)</label>
                    <textarea id="description" name="description"><?= $data["description"] ?? '' ?></textarea>
                </div>

                <div class="input-box">
                    <label class="checkbox-container">
                        <input type="checkbox" name="status" <?= isset($data["status"]) && $data["status"] == "enabled" ? 'checked' : '' ?> />
                        Produto Ativo?
                    </label>
                </div>

                <div class="input-box">
                    <label for="wordKeys">Palavras chave (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="whole-word"></i>
                        <input id="wordKeys" name="wordKeys" type="text" value="<?= $data["wordKeys"] ?? '' ?>">
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="price">Preço de venda (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="circle-dollar-sign"></i>
                            <input id="price" name="price" type="number" value="<?= $data["price"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="promotional_price">Preço promocinal (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="badge-percent"></i>
                            <input id="promotional_price" name="promotional_price" type="number"
                                value="<?= $data["promotional_price"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="cost">Custo (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="hand-coins"></i>
                            <input id="cost" name="cost" type="number" value="<?= $data["cost"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="width">Largura(cm) (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="width" name="width" type="number" value="<?= $data["width"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="height">Altura(cm) (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="height" name="height" type="number" value="<?= $data["height"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="length">Comprimento(cm) (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="length" name="length" type="number" value="<?= $data["length"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="weight">Peso em kg (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="weight"></i>
                            <input id="weight" name="weight" type="number" value="<?= $data["weight"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <label for="brand">Marca (obrigatório)</label>
                    <div class="text-input">
                        <i data-lucide="tag"></i>
                        <input id="brand" name="brand" type="text" value="<?= $data["brand"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="nbm">NBM - Código fiscal do produto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="barcode"></i>
                        <input id="nbm" name="nbm" type="text" value="<?= $data["nbm"] ?? '' ?>">
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="model">Modelo do produto (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="file-box"></i>
                            <input id="model" name="model" type="text" value="<?= $data["model"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="gender">Gênero do produto (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="package-open"></i>
                            <input id="gender" name="gender" type="text" value="<?= $data["genre"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="volumes">Quantidade de volumes (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="boxes"></i>
                            <input id="volumes" name="volumes" type="number" value="<?= $data["volumes"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="warrantyTime">Tempo de garantia(meses) (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="calendar-days"></i>
                            <input id="warrantyTime" name="warrantyTime" type="text"
                                value="<?= $data["warrantyTime"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="category">Categoria (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="category" name="category" type="text" value="<?= $data["category"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="subcategory">Subcategoria (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="subcategory" name="subcategory" type="text"
                                value="<?= $data["subcategory"] ?? '' ?>">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="endcategory">Categoria Final (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="endcategory" name="endcategory" type="text"
                                value="<?= $data["endcategory"] ?? '' ?>">
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <label for="urlYoutube">URL video do produto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="youtube"></i>
                        <input id="urlYoutube" name="urlYoutube" type="text" value="<?= $data["urlYoutube"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="googleDescription">Descrição do Google para SEO (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="chrome"></i>
                        <input id="googleDescription" name="googleDescription" type="text"
                            value="<?= $data["googleDescription"] ?? '' ?>">
                    </div>
                </div>

                <div class="input-box">
                    <label for="manufacturing">Fabricação (opcional)</label>
                    <div class="custom-select">
                        <select id="manufacturing" name="manufacturing">
                            <option value="">Selecionar</option>
                            <option value="Nacional" <?= isset($data["manufacturing"]) && $data["manufacturing"] == "Nacional" ? 'selected' : '' ?>><i
                                    data-lucide="map-pin-house"></i>Nacional</option>
                            <option value="Importado" <?= isset($data["manufacturing"]) && $data["manufacturing"] == "Importado" ? 'selected' : '' ?>><i
                                    data-lucide="plane-landing"></i>Importado</option>
                        </select>

                    </div>
                </div>

                <div class="attributes">
                    <h2>Atributos (opcional)</h2>
                    <br>

                    <div class="attribute">
                        <div class="mult-inputs">
                            <div class="input-box">
                                <label for="attribute[0][key]">Chave</label>
                                <div class="text-input">
                                    <i data-lucide="key-square"></i>
                                    <input id="attribute[0][key]" name="attribute[0][key]" type="text">
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="attribute[0][value]">Valor</label>
                                <div class="text-input">
                                    <i data-lucide="whole-word"></i>
                                    <input id="attribute[0][value]" name="attribute[0][value]" type="text">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <br>
                <button class="button button-tertiary next-step" type="button"
                    onclick="openSection('variations', 'tabVariations')">Próximo<i
                        data-lucide="arrow-right"></i></button>
            </section>

            <section id="variations">
                <h2>Variações do produto</h2>
                <br>

                <div id="1" class="variation">
                    <div class="input-box">
                        <label for="variationRef">Ref</label>
                        <div class="text-input">
                            <i data-lucide="barcode"></i>
                            <input id="variationRef" name="variations[0][ref]" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationSku">SKU</label>
                        <div class="text-input">
                            <i data-lucide="barcode"></i>
                            <input id="variationSku" name="variations[0][sku]" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationQty">Quantidade em estoque</label>
                        <div class="text-input">
                            <i data-lucide="boxes"></i>
                            <input id="variationQty" name="variations[0][qty]" type="number">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationEan">Código EAN</label>
                        <div class="text-input">
                            <i data-lucide="scan-barcode"></i>
                            <input id="variationEan" name="variations[0][ean]" type="text">
                        </div>
                    </div>

                    <div class="product-images">
                        <h3>Imagens da variação (opcional)</h3>
                        <div class="input-box">
                            <label>Imagem 1</label>
                            <div class="text-input">
                                <i data-lucide="images"></i>
                                <input name="variations[0][images][0]" type="text">
                            </div>
                        </div>

                    </div>

                    <div class="specifications">
                        <h3>Especificações da variação (opcional)</h3>

                        <div class="specification">
                            <div class="mult-inputs">
                                <div class="input-box">
                                    <label for="specificationKey1">Chave</label>
                                    <div class="text-input">
                                        <i data-lucide="key-square"></i>
                                        <input id="specificationKey1" name="variations[0][specifications][0][key]"
                                            type="text">
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="specificationValue1">Valor</label>
                                    <div class="text-input">
                                        <i data-lucide="whole-word"></i>
                                        <input id="specificationValue1" name="variations[0][specifications][0][value]"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <br>
                <button class="button button-secondary"> <i data-lucide="copy-plus"></i> Nova variação</button>

                <br>

                <button class="button button-primary next-step" type="submit">Cadastrar<i
                        data-lucide="send-horizontal"></i></button>
                <button class="button button-tertiary previous-step" type="button"
                    onclick="openSection('main', 'tabMain')"><i data-lucide="arrow-left"></i>Anterior</button>
            </section>

        </div>
    </form>
</div>

<?php $error = [] ?>

<script>
    function openSection(sectionName, tabActive) {
        let sections = document.querySelectorAll('.form-body > section')
        sections.forEach(section => {
            section.style.display = 'none';
        })

        let activeSection = document.getElementById(sectionName);
        activeSection.style.display = 'block';

        let tabs = document.querySelectorAll(".tab");
        tabs.forEach(tab => {
            tab.classList.remove("active");
        });

        document.querySelector(`.tab#${tabActive}`).classList.add("active");
        window.scrollTo(0, 0);

    }

    function hideErrors() {
        let errorContainer = document.querySelector('.error-container');
        if (errorContainer) errorContainer.style.display = 'none'
    }

    document.querySelector('form').addEventListener('click', hideErrors);
</script>