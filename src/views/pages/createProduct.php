<?php $this->layout('../layouts/default', ['title' => 'Teste Dev Jr Precode']) ?>

<?php $this->start('meta') ?>
<link rel="stylesheet" href=<?= url("src/views/assets/styles/form.css") ?>>
<?php $this->stop() ?>

<div class="container">
    <form action="#">
        <div class="form-header">
            <h2>Registro de Produto</h2>
            <h3>Cadastre seu produto no formulário abaixo.</h3>
        </div>

        <hr>

        <div class="form-body">
            <div class="input-box">
                <label for="sku">SKU do produto pai (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="sku" name="sku" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="name">Título do produto (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="name" name="name" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="shortName">Título curto (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="shortName" name="shortName" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="description">Descrição detalhada do produto (obrigatório)</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="input-box">
                <label for="status">Status</label>
                STATUS
            </div>

            <div class="input-box">
                <label for="wordKeys">Palavras chave (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="wordKeys" name="wordKeys" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="price">Preço de venda (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="price" name="price" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="promotional_price">Preço promocinal (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="promotional_price" name="promotional_price" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="cost">Custo (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="cost" name="cost" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="weight">Peso em kg (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="weight" name="weight" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="width">Largura(cm) (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="width" name="width" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="height">Altura(cm) (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="height" name="height" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="length">Comprimento(cm) (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="length" name="length" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="brand">Marca (obrigatório)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="brand" name="brand" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="nbm">NBM - Código fiscal do produto (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="nbm" name="nbm" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="model">Modelo do produto (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="model" name="model" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="gender">Gênero do produto (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="gender" name="gender" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="volumes">Quantidade de volumes (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="volumes" name="volumes" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="warrantyTime">Tempo de garantia(meses) (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="warrantyTime" name="warrantyTime" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="category">Categoria (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="category" name="category" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="subcategory">Subcategoria (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="subcategory" name="subcategory" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="endcategory">Categoria Final (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="endcategory" name="endcategory" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="urlYoutube">URL video do produto (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="urlYoutube" name="urlYoutube" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="googleDescription">Descrição do Google para SEO (opcional)</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="googleDescription" name="googleDescription" type="text">
                </div>
            </div>

            <div class="input-box">
                <label for="manufacturing">Fabricação - SELECT</label>
                <div class="text-input">
                    <i data-lucide="package-plus"></i>
                    <input id="manufacturing" name="manufacturing" type="text">
                </div>
            </div>

            <div class="attributes">
                <h2>Atributos</h2>

                <div class="attribute">
                    <div class="input-box">
                        <label for="attributeKey1">Key</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="attributeKey1" name="attributeKey1" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="attributeValue1">Value</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="attributeValue1" name="attributeValue1" type="text">
                        </div>
                    </div>
                </div>

                <button class="button button-tertiary">Novo atributo</button>
            </div>

            <hr>
            <section class="variations">
                <h2>Variações do produto</h2>

                <div class="variation1">
                    <div class="input-box">
                        <label for="variationRef">Ref</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="variationRef" name="variationRef" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationSku">SKU</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="variationSku" name="variationSku" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationQty">Quantidade em estoque</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="variationQty" name="variationQty" type="text">
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="variationEan">Código EAN</label>
                        <div class="text-input">
                            <i data-lucide="package-plus"></i>
                            <input id="variationEan" name="variationEan" type="text">
                        </div>
                    </div>

                    <div class="product-images">
                        <h3>Imagens da variação</h3>
                        <div class="input-box">
                            <label for="image1">Imagem 1</label>
                            <div class="text-input">
                                <i data-lucide="package-plus"></i>
                                <input id="image1" name="image1" type="text">
                            </div>
                        </div>

                        <button class="button button-tertiary">Nova imagem</button>
                    </div>

                    <div class="specifications">
                        <h3>Especificações da variação</h3>

                        <div class="specification">
                            <div class="input-box">
                                <label for="specificationKey1">Key</label>
                                <div class="text-input">
                                    <i data-lucide="package-plus"></i>
                                    <input id="specificationKey1" name="specificationKey1" type="text">
                                </div>
                            </div>
                            <div class="input-box">
                                <label for="specificationValue1">Value</label>
                                <div class="text-input">
                                    <i data-lucide="package-plus"></i>
                                    <input id="specificationValue1" name="specificationValue1" type="text">
                                </div>
                            </div>
                        </div>

                        <button class="button button-tertiary">Nova especificação</button>
                    </div>

                </div>
                <button class="button button-primary">Nova variação</button>
            </section>


        </div>

        <div class="form-footer">
            <button class="button button-secondary" type="submit">Cadastrar Produto</button>
        </div>
    </form>
</div>