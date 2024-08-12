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
                        <input id="sku" name="sku" type="number" maxlength="10" value="<?= $data["sku"] ?? '' ?>"
                            placeholder="Sku do produto pai. Exemplo: 123456789">
                    </div>
                </div>

                <div class="input-box">
                    <label for="name">Título do produto (obrigatório)</label>
                    <div class="text-input">
                        <i data-lucide="package"></i>
                        <input id="name" name="name" type="text" value="<?= $data["name"] ?? '' ?>"
                            placeholder="Título do produto. Exemplo: Guarda-roupa Casal 6 portas Amendôa...">
                    </div>
                </div>

                <div class="input-box">
                    <label for="shortName">Título curto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="package"></i>
                        <input id="shortName" name="shortName" type="text" value="<?= $data["shortName"] ?? '' ?>"
                            placeholder="Título curto do produto. Exemplo: Guarda-roupa Casal...">
                    </div>
                </div>

                <div class="input-box">
                    <label for="description">Descrição detalhada do produto (obrigatório)</label>
                    <textarea id="description" name="description"
                        placeholder="Exemplo: O Guarda Roupas Flahs é a escolha perfeita para você que busca praticidade, conforto, e design moderno ..."><?= $data["description"] ?? '' ?></textarea>
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
                        <input id="wordKeys" name="wordKeys" type="text" value="<?= $data["wordKeys"] ?? '' ?>"
                            placeholder="Exemplo: guarda-roupa casal amendôa">
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="price">Preço de venda (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="circle-dollar-sign"></i>
                            <input id="price" name="price" type="number" value="<?= $data["price"] ?? '' ?>"
                                placeholder="Exemplo: 1000,00">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="promotional_price">Preço promocinal (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="badge-percent"></i>
                            <input id="promotional_price" name="promotional_price" type="number"
                                value="<?= $data["promotional_price"] ?? '' ?>" placeholder="Exemplo: 1200,00">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="cost">Custo (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="hand-coins"></i>
                            <input id="cost" name="cost" type="number" value="<?= $data["cost"] ?? '' ?>"
                                placeholder="Exemplo: 950,00">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="width">Largura em cm (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="width" name="width" type="number" value="<?= $data["width"] ?? '' ?>"
                                placeholder="Exemplo: 150">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="height">Altura em cm (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="height" name="height" type="number" value="<?= $data["height"] ?? '' ?>"
                                placeholder="Exemplo: 180">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="length">Profundidade em cm (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="pencil-ruler"></i>
                            <input id="length" name="length" type="number" value="<?= $data["length"] ?? '' ?>"
                                placeholder="Exemplo: 47">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="weight">Peso em kg (obrigatório)</label>
                        <div class="text-input">
                            <i data-lucide="weight"></i>
                            <input id="weight" name="weight" type="number" value="<?= $data["weight"] ?? '' ?>"
                                placeholder="Exemplo: 68,8">
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <label for="brand">Marca (obrigatório)</label>
                    <div class="text-input">
                        <i data-lucide="tag"></i>
                        <input id="brand" name="brand" type="text" value="<?= $data["brand"] ?? '' ?>"
                            placeholder="Exemplo: Demóbile">
                    </div>
                </div>

                <div class="input-box">
                    <label for="nbm">NBM - Código fiscal do produto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="barcode"></i>
                        <input id="nbm" name="nbm" type="text" value="<?= $data["nbm"] ?? '' ?>"
                            placeholder="Código fiscal">
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="model">Modelo do produto (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="file-box"></i>
                            <input id="model" name="model" type="text" value="<?= $data["model"] ?? '' ?>"
                                placeholder="Exemplo: Guarda Roupas Casal 6 portas 2 Gavetas Flash Amêndoa Demóbile">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="gender">Gênero do produto (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="package-open"></i>
                            <input id="gender" name="gender" type="text" value="<?= $data["genre"] ?? '' ?>"
                                placeholder="Gênero">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="volumes">Quantidade de volumes (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="boxes"></i>
                            <input id="volumes" name="volumes" type="number" value="<?= $data["volumes"] ?? '' ?>"
                                placeholder="Exemplo: 2">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="warrantyTime">Tempo de garantia em meses (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="calendar-days"></i>
                            <input id="warrantyTime" name="warrantyTime" type="text"
                                value="<?= $data["warrantyTime"] ?? '' ?>" placeholder="Exemplo: 6">
                        </div>
                    </div>
                </div>

                <div class="mult-inputs">
                    <div class="input-box">
                        <label for="category">Categoria (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="category" name="category" type="text" value="<?= $data["category"] ?? '' ?>"
                                placeholder="Exemplo: Móveis">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="subcategory">Subcategoria (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="subcategory" name="subcategory" type="text"
                                value="<?= $data["subcategory"] ?? '' ?>" placeholder="Exemplo: Quarto Casal">
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="endcategory">Categoria Final (opcional)</label>
                        <div class="text-input">
                            <i data-lucide="square-stack"></i>
                            <input id="endcategory" name="endcategory" type="text"
                                value="<?= $data["endcategory"] ?? '' ?>" placeholder="Exemplo: Roupeiro">
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <label for="urlYoutube">URL video do produto (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="youtube"></i>
                        <input id="urlYoutube" name="urlYoutube" type="text" value="<?= $data["urlYoutube"] ?? '' ?>"
                            placeholder="Exemplo: https://www.youtube.com/watch?v=ABCXYZ123">
                    </div>
                </div>

                <div class="input-box">
                    <label for="googleDescription">Descrição do Google para SEO (opcional)</label>
                    <div class="text-input">
                        <i data-lucide="chrome"></i>
                        <input id="googleDescription" name="googleDescription" type="text"
                            value="<?= $data["googleDescription"] ?? '' ?>"
                            placeholder="Exemplo: Guarda-roupa Casal 6 portas Amendôa...">
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

                    <div class="controls">
                        <button id="new-attribute" class="button button-tertiary sm" type="button"><i
                                data-lucide="plus"></i>Novo atributo</button>
                    </div>
                    <br>

                    <div id="attributes-container">
                        <?php if (isset($data["attribute"])):
                            foreach ($data["attribute"] as $key => $attribute):
                                ?>
                                <div id="<?= $key ?>" class="attribute">
                                    <div class="mult-inputs">
                                        <div class="input-box key">
                                            <label for="attribute[<?= $key ?>][key]">Chave</label>
                                            <div class="text-input">
                                                <i data-lucide="key-square"></i>
                                                <input id="attribute[<?= $key ?>][key]" name="attribute[<?= $key ?>][key]"
                                                    type="text" placeholder="Exemplo: Cor" value="<?= $attribute['key'] ?>">
                                            </div>
                                        </div>
                                        <div class="input-box value">
                                            <label for="attribute[<?= $key ?>][value]">Valor</label>
                                            <div class="text-input">
                                                <i data-lucide="whole-word"></i>
                                                <input id="attribute[<?= $key ?>][value]" name="attribute[<?= $key ?>][value]"
                                                    type="text" placeholder="Exemplo: Amendôa"
                                                    value="<?= $attribute['value'] ?>">
                                            </div>
                                        </div>
                                        <button onclick="destroyAttribute(this)" id="<?= $key ?>"
                                            class="button button-danger sm remove-attribute" type="button"><i
                                                data-lucide="trash-2"></i></button>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div id="0" class="attribute">
                                <div class="mult-inputs">
                                    <div class="input-box key">
                                        <label for="attribute[0][key]">Chave</label>
                                        <div class="text-input">
                                            <i data-lucide="key-square"></i>
                                            <input id="attribute[0][key]" name="attribute[0][key]" type="text"
                                                placeholder="Exemplo: Cor">
                                        </div>
                                    </div>
                                    <div class="input-box value">
                                        <label for="attribute[0][value]">Valor</label>
                                        <div class="text-input">
                                            <i data-lucide="whole-word"></i>
                                            <input id="attribute[0][value]" name="attribute[0][value]" type="text"
                                                placeholder="Exemplo: Amendôa">
                                        </div>
                                    </div>
                                    <button onclick="destroyAttribute(this)"
                                        class="button button-danger sm remove-attribute" type="button"><i
                                            data-lucide="trash-2"></i></button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <br>
                <button class="button button-tertiary next-step" type="button"
                    onclick="openSection('variations', 'tabVariations')">Próximo<i
                        data-lucide="arrow-right"></i></button>
            </section>

            <section id="variations">
                <h2>Variações do produto (opcional)</h2>
                <br>

                <div id="1" class="variation">
                    <div class="input-box">
                        <label for="variationRef">Ref</label>
                        <div class="text-input">
                            <i data-lucide="barcode"></i>
                            <input id="variationRef" name="variations[0][ref]" type="text"
                                placeholder="Código alfanumérico de referência do sku, que pode ser o sku da loja/integradora">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationSku">SKU</label>
                        <div class="text-input">
                            <i data-lucide="barcode"></i>
                            <input id="variationSku" name="variations[0][sku]" type="text"
                                placeholder="Código sku da variação">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationQty">Quantidade em estoque</label>
                        <div class="text-input">
                            <i data-lucide="boxes"></i>
                            <input id="variationQty" name="variations[0][qty]" type="number"
                                placeholder="Quantidade em estoque">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationEan">Código EAN</label>
                        <div class="text-input">
                            <i data-lucide="scan-barcode"></i>
                            <input id="variationEan" name="variations[0][ean]" type="text"
                                placeholder="Código ean da variação">
                        </div>
                    </div>

                    <div class="product-images">
                        <h3>Imagens da variação (opcional)</h3>
                        <div class="controls">
                            <button id="new-image" class="button button-tertiary sm" type="button"><i
                                    data-lucide="image-plus"></i>Nova imagem</button>
                        </div>
                        <br>

                        <div class="mult-inputs">
                            <div class="input-box">
                                <label>Imagem 1</label>
                                <div class="text-input">
                                    <i data-lucide="images"></i>
                                    <input name="variations[0][images][0]" type="text"
                                        placeholder="Exemplo: https://www.seudominio.com.br/images/imagem.jpg">
                                </div>
                            </div>

                            <button onclick="destroyImage(this)" id="0" class="button button-danger sm remove-attribute"
                                type="button"><i data-lucide="trash-2"></i></button>
                        </div>


                    </div>

                    <div class="specifications">
                        <h3>Especificações da variação (opcional)</h3>

                        <div class="controls">
                            <button id="new-specification" class="button button-tertiary sm" type="button"><i
                                    data-lucide="plus"></i>Nova especificação</button>
                        </div>
                        <br>

                        <div class="specification">
                            <div class="mult-inputs">
                                <div class="input-box">
                                    <label for="specificationKey1">Chave</label>
                                    <div class="text-input">
                                        <i data-lucide="key-square"></i>
                                        <input id="specificationKey1" name="variations[0][specifications][0][key]"
                                            type="text" placeholder="Exemplo: Cor">
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="specificationValue1">Valor</label>
                                    <div class="text-input">
                                        <i data-lucide="whole-word"></i>
                                        <input id="specificationValue1" name="variations[0][specifications][0][value]"
                                            type="text" placeholder="Exemplo: Branco">
                                    </div>
                                </div>

                                <button onclick="destroySpecification(this)" id="0"
                                    class="button button-danger sm remove-attribute" type="button"><i
                                        data-lucide="trash-2"></i></button>
                            </div>
                        </div>

                    </div>

                </div>

                <br>
                <button class="button button-secondary sm" type="button"> <i data-lucide="copy-plus"></i> Nova
                    variação</button>

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

    // New attribute
    let btnNewAttribute = document.getElementById("new-attribute");
    btnNewAttribute.addEventListener('click', () => {
        let attributes = document.querySelectorAll('#attributes-container .attribute');
        let lastAttribute = attributes[attributes.length - 1];
        let attributeIndex = +lastAttribute.attributes.id.value;

        let clone = lastAttribute.cloneNode(true);
        let cloneIndex = attributeIndex + 1;
        clone.attributes.id.value = cloneIndex;

        // Attribute Key
        let cloneKeyLabel = clone.querySelector('.key label');
        let cloneKeyInput = clone.querySelector('.key input');

        cloneKeyLabel.setAttribute("for", `attribute[${cloneIndex}][key]`);
        cloneKeyInput.setAttribute("id", `attribute[${cloneIndex}][key]`);
        cloneKeyInput.setAttribute("name", `attribute[${cloneIndex}][key]`);

        // Attribute Value
        let cloneValueLabel = clone.querySelector('.value label');
        let cloneValueInput = clone.querySelector('.value input');

        cloneValueLabel.setAttribute("for", `attribute[${cloneIndex}][value]`);
        cloneValueInput.setAttribute("id", `attribute[${cloneIndex}][value]`);
        cloneValueInput.setAttribute("name", `attribute[${cloneIndex}][value]`);

        let attributesContainer = document.getElementById('attributes-container');
        attributesContainer.appendChild(clone);
    });

    // Remove Atrribute
    function destroyAttribute(btn) {
        let attribute = btn.closest(".attribute");
        attribute.remove();
    } 
</script>