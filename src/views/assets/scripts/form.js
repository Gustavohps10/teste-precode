// Change Tabs
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

//New Variation
function newVariation(params) {
    let variations = document.querySelectorAll('#variations-container .variation');
    let lastVariation = variations[variations.length - 1];
    let variationIndex = +lastVariation.attributes.id.value;

    let clone = lastVariation.cloneNode(true);

    let variationsContainer = document.getElementById('variations-container');
    variationsContainer.appendChild(clone);
}



document.querySelector("form").addEventListener("submit", function (e) {
    let variations = document.querySelectorAll('#variations-container .variation');
    variations.forEach((variation, variationIndex) => {
        let skuInput = variation.querySelector("[name='variations[][sku]']");
        let refInput = variation.querySelector("[name='variations[][ref]']");
        let qtyInput = variation.querySelector("[name='variations[][qty]']");
        let eanInput = variation.querySelector("[name='variations[][ean]']");

        skuInput.setAttribute("name", `variations[${variationIndex}][sku]`)
        refInput.setAttribute("name", `variations[${variationIndex}][ref]`)
        qtyInput.setAttribute("name", `variations[${variationIndex}][qty]`)
        eanInput.setAttribute("name", `variations[${variationIndex}][ean]`)

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