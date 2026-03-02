document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".main-navigation");

  if (!toggleButton || !navigation) {
    return;
  }

  toggleButton.addEventListener("click", () => {
    const isOpen = navigation.classList.toggle("is-open");

    toggleButton.setAttribute("aria-expanded", isOpen);

    toggleButton.textContent = isOpen ? "✕" : "☰";
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

  createBlob("rgba(38, 143, 126, 0.45)", "10%", "70%");
  createBlob("rgba(131, 42, 173, 0.58)", "60%", "10%");
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
      [{ transform: "translateY(0px)" }, { transform: "translateY(-40px)" }],
      {
        duration: 8000 + Math.random() * 5000,
        iterations: Infinity,
        direction: "alternate",
        easing: "ease-in-out",
      },
    );

    container.appendChild(p);
  }
});

// Veines organiques
const canvas = document.getElementById("veins-canvas");
const ctx = canvas.getContext("2d");

function resizeCanvas() {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
}

resizeCanvas();
window.addEventListener("resize", resizeCanvas);

const veins = [];
const veinCount = 18;

function createVeins() {
  veins.length = 0;

  for (let i = 0; i < veinCount; i++) {
    veins.push({
      startX: Math.random() * canvas.width,
      startY: Math.random() * canvas.height,
      cp1X: Math.random() * canvas.width,
      cp1Y: Math.random() * canvas.height,
      cp2X: Math.random() * canvas.width,
      cp2Y: Math.random() * canvas.height,
      endX: Math.random() * canvas.width,
      endY: Math.random() * canvas.height,
      drift: (Math.random() - 0.5) * 0.2,
    });
  }
}

createVeins();

function drawVeins() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  ctx.lineWidth = 1;
  ctx.strokeStyle = "rgba(42, 173, 151, 0.25)"; // vert présence doux

  veins.forEach((v) => {
    ctx.beginPath();
    ctx.moveTo(v.startX, v.startY);

    ctx.bezierCurveTo(v.cp1X, v.cp1Y, v.cp2X, v.cp2Y, v.endX, v.endY);

    ctx.stroke();

    // micro-mouvement organique
    v.cp1X += v.drift;
    v.cp2Y += v.drift;
  });

  requestAnimationFrame(drawVeins);
}

drawVeins();
