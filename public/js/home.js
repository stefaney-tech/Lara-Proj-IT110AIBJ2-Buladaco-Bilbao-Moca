// --- LATELY. Home page JavaScript: featured-card carousel + hero image carousel.
document.addEventListener("DOMContentLoaded", () => {
    // --- Folder that holds the product images (set in home.blade.php with asset()).
    const imageBase = window.LATELY_IMAGE_PATH || "images/";

    // --- Featured product cards (dots + arrows)
    const productGrid = document.querySelector(".product-grid");
    const dots = [...document.querySelectorAll(".dot")];
    const previous = document.querySelector("#prevProducts");
    const next = document.querySelector("#nextProducts");
    let activeCollection = 0;

    // --- [image, name, category, description, price, note]
    const featuredProducts = [
        [
            "chocolate-pistachio-loaf.png",
            "Chocolate Pistachio Loaf",
            "PASTRY",
            "Rich chocolate and pistachio in every slice.",
            "₱145",
            "✦ Favorites",
        ],
        [
            "iced-tiramisu-latte.png",
            "Iced Tiramisu Latte",
            "LATTE",
            "Cool, creamy coffee with a cocoa finish.",
            "₱165",
            "◷ 5 min",
        ],
        [
            "mini-pumpkin-pie.png",
            "Mini Thick Pumpkin Pie",
            "PASTRY",
            "A warm little pie with a spiced pumpkin center.",
            "₱135",
            "✦ Freshly baked",
        ],
        [
            "strawberry-frapp.png",
            "Strawberry Frappé",
            "FRAPPE",
            "Creamy strawberry with a bright berry swirl.",
            "₱175",
            "✦ Favorites",
        ],
        [
            "cookie-croissant-swirl.png",
            "Cookie Croissant Swirl",
            "PASTRY",
            "Buttery pastry layered with chocolate cookies.",
            "₱150",
            "✦ Favorites",
        ],
        [
            "caramel-brulee-latte.png",
            "Caramel Brûlée Latte",
            "LATTE",
            "Velvety coffee finished with caramel cream.",
            "₱170",
            "◷ 5 min",
        ],
        [
            "croissant.png",
            "Classic Butter Croissant",
            "PASTRY",
            "Golden, flaky, and freshly baked.",
            "₱125",
            "✦ Top favorite",
        ],
        [
            "peppermint-hot-chocolate.png",
            "Peppermint Hot Chocolate",
            "HOT",
            "Rich cocoa topped with peppermint cream.",
            "₱155",
            "✦ Top Selling",
        ],
        [
            "sugar-plum-danish.png",
            "Sugar Plum Cheese Danish",
            "PASTRY",
            "Flaky pastry with a bright fruit center.",
            "₱145",
            "◷ 5 min",
        ],
        [
            "iced-sugar-cookie-matcha.png",
            "Sugar Cookie Matcha Latte",
            "LATTE",
            "Creamy matcha with a lightly sweet finish.",
            "₱175",
            "◷ 5 min",
        ],
        [
            "coffee-cake.png",
            "Classic Coffee Cake",
            "CAKE",
            "Soft cinnamon cake with a buttery crumb topping.",
            "₱135",
            "◷ 5 min",
        ],
        [
            "apple-lemonade.png",
            "Apple Lemonade Refresher",
            "REFRESHER",
            "Bright apple and citrus with a refreshing finish.",
            "₱150",
            "◷ 5 min",
        ],
    ];
    const productCards = [...document.querySelectorAll(".product-card")];

    function showFeaturedCollection(index) {
        if (!productCards.length) return;
        activeCollection = (index + dots.length) % dots.length;
        productCards.forEach((card, cardIndex) => {
            const productIndex =
                activeCollection * productCards.length + cardIndex;
            const product = featuredProducts[productIndex];
            card.querySelector(".product-photo img").src =
                imageBase + product[0];
            card.querySelector(".product-photo img").alt = product[1];
            card.querySelector(".product-category").textContent = product[2];
            card.querySelector("h2").textContent = product[1];
            card.querySelector(".product-info p").textContent = product[3];
            card.querySelector(".price").textContent = product[4];
            card.querySelector(".tiny-note").textContent = product[5];
        });
    }
    function setActiveDot(index) {
        if (!dots.length) return;
        showFeaturedCollection(index);
        dots.forEach((dot, i) =>
            dot.classList.toggle("active", i === activeCollection),
        );
        if (productGrid) {
            productGrid.animate(
                [
                    { opacity: 0.55, transform: "translateY(5px)" },
                    { opacity: 1, transform: "translateY(0)" },
                ],
                { duration: 250 },
            );
        }
    }
    if (previous)
        previous.addEventListener("click", () =>
            setActiveDot(activeCollection - 1),
        );
    if (next)
        next.addEventListener("click", () =>
            setActiveDot(activeCollection + 1),
        );
    dots.forEach((dot, index) =>
        dot.addEventListener("click", () => setActiveDot(index)),
    );
    showFeaturedCollection(0);

    // --- Hero product image carousel
    const stageImages = [
        ...document.querySelectorAll(".food-stage .stage-image"),
    ];
    const stagePrevious = document.querySelector(".hero-prev");
    const stageNext = document.querySelector(".hero-next");
    let activeStage = 0;
    let stageTimer;

    function showStage(index) {
        if (!stageImages.length) return;
        activeStage = (index + stageImages.length) % stageImages.length;
        stageImages.forEach((image, i) => {
            const offset =
                (i - activeStage + stageImages.length) % stageImages.length;
            image.classList.toggle("active", offset === 0);
            image.classList.toggle(
                "stage-prev",
                offset === stageImages.length - 1,
            );
            image.classList.toggle("stage-next", offset === 1);
        });
    }
    function moveStage(direction) {
        showStage(activeStage + direction);
        clearInterval(stageTimer);
        stageTimer = setInterval(() => showStage(activeStage + 1), 4500);
    }
    if (stageImages.length) {
        showStage(0);
        stageTimer = setInterval(() => showStage(activeStage + 1), 4500);
        if (stagePrevious)
            stagePrevious.addEventListener("click", (event) => {
                event.preventDefault();
                moveStage(-1);
            });
        if (stageNext)
            stageNext.addEventListener("click", (event) => {
                event.preventDefault();
                moveStage(1);
            });
    }
});
