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

if (window.location.pathname === "/contact") {
    document.getElementById("contact").style.display = "none";
  }
// Halo respire
  document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("bg-animation");

    function createBlob(color, top, left) {
        const blob = document.createElement("div");
        blob.classList.add("organic-blob");
        blob.style.background = color;
        blob.style.top = top;
        blob.style.left = left;
        container.appendChild(blob);
    }

    createBlob("rgba(38, 143, 125, 0.62)", "10%", "70%");
    createBlob("rgba(131, 42, 173, 0.53)", "60%", "10%");
});

//particules
document.addEventListener("DOMContentLoaded", () => {
    const container = document.getElementById("bg-animation");

    for (let i = 0; i < 20; i++) {
        const p = document.createElement("div");
        p.classList.add("particle");

        p.style.top = Math.random() * 100 + "%";
        p.style.left = Math.random() * 100 + "%";

        p.animate(
            [
                { transform: "translateY(0px)" },
                { transform: "translateY(-40px)" }
            ],
            {
                duration: 8000 + Math.random() * 5000,
                iterations: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            }
        );

        container.appendChild(p);
    }
});