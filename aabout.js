const parentContainer = document.querySelector('.hero-con');

parentContainer.addEventListener('click', event => {
    const current = event.target;
    const isButton = current.classList.contains('button');

    if (!isButton) return;

    const currentText = current.parentNode.querySelector('.butto');

    currentText.classList.toggle('butto--show');
    current.textContent = current.textContent.includes('Read More..') ?
        "Read Less.." : "Read More..";
});
