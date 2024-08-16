// Clones
const attributeClone = document.querySelectorAll("#attributes-container .attribute")[0].cloneNode(true);
const variationClone = document.querySelectorAll('#variations-container .variation')[0].cloneNode(true);
const imageClone = document.querySelectorAll('.product-images .image')[0].cloneNode(true);
const specClone = document.querySelectorAll('.specifications .specification')[0].cloneNode(true);

// Change Tabs
function openSection(sectionName, tabActive) {
    let sections = document.querySelectorAll('.form-body > section')
    sections.forEach(section => {
        section.style.display = 'none';
    })

    let activeSection = document.getElementById(sectionName);
    activeSection.style.display = 'flex';

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
function newAttribute() {
    let clone = attributeClone.cloneNode(true);

    let attributesContainer = document.querySelector('#attributes-container');
    attributesContainer.append(clone);
}

// Remove Atrribute
function destroyAttribute(btn) {
    let attribute = btn.closest(".attribute");
    attribute.remove();
}

//New Variation
function newVariation() {
    let clone = variationClone.cloneNode(true);
    let variationsContainer = document.getElementById('variations-container');
    variationsContainer.appendChild(clone);
}

//New Image
function newImage(btnNewImage) {
    let clone = imageClone.cloneNode(true);
    let variation = btnNewImage.closest(".variation");
    let imagesContainer = variation.querySelector('.images-container');
    imagesContainer.append(clone);
}

// Remove Image
function destroyImage(btn) {
    let image = btn.closest(".image");
    image.remove();
}

//New Spec
function newSpec(btnNewSpec) {
    let clone = specClone.cloneNode(true);
    let variation = btnNewSpec.closest(".variation");
    let specificationsContainer = variation.querySelector('.specifications-container');
    specificationsContainer.append(clone);
}

//Remove Spec
function destroySpecification(btn) {
    let spec = btn.closest(".specification");
    spec.remove();
}

//Map data on submit
document.querySelector("form").addEventListener("submit", function (e) {
    let attributes = document.querySelectorAll("#attributes-container .attribute");
    attributes.forEach((attribute, attributeIndex) => {
        let keyInput = attribute.querySelector("[name='attribute[][key]']");
        let valueInput = attribute.querySelector("[name='attribute[][value]']");

        console.log(keyInput, valueInput);


        keyInput.setAttribute("name", `attribute[${attributeIndex}][key]`)
        valueInput.setAttribute("name", `attribute[${attributeIndex}][value]`)
    })

    let variations = document.querySelectorAll('#variations-container .variation');
    variations.forEach((variation, variationIndex) => {
        let skuInput = variation.querySelector("[name='variations[][sku]']");
        let refInput = variation.querySelector("[name='variations[][ref]']");
        let qtyInput = variation.querySelector("[name='variations[][qty]']");
        let eanInput = variation.querySelector("[name='variations[][ean]']");

        skuInput.setAttribute("name", `variations[${variationIndex}][sku]`);
        refInput.setAttribute("name", `variations[${variationIndex}][ref]`);
        qtyInput.setAttribute("name", `variations[${variationIndex}][qty]`);
        eanInput.setAttribute("name", `variations[${variationIndex}][ean]`);

        let images = variation.querySelectorAll('.product-images .image');
        images.forEach((image, imageIndex) => {
            let imgInput = image.querySelector("[name='variations[][images][]']")
            imgInput.setAttribute("name", `variations[${variationIndex}][images][${imageIndex}]`)
        })

        let specifications = variation.querySelectorAll('.specification');
        specifications.forEach((spec, specIndex) => {
            let keyInput = spec.querySelector("[name='variations[][specifications][][key]']");
            let valueInput = spec.querySelector("[name='variations[][specifications][][value]']");

            keyInput.setAttribute("name", `variations[${variationIndex}][specifications][${specIndex}][key]`)
            valueInput.setAttribute("name", `variations[${variationIndex}][specifications][${specIndex}][value]`)
        })
    })
});