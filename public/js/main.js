document.addEventListener('DOMContentLoaded', () => {

    const toggleButton = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (!toggleButton || !navigation) {
        return;
    }

    toggleButton.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');

        toggleButton.setAttribute('aria-expanded', isOpen);

        toggleButton.textContent = isOpen ? '✕' : '☰';
    });

});
