// --- LATELY. About page JavaScript: "Read more / Read less" toggle.
document.addEventListener("DOMContentLoaded", () => {
    const readMoreButton = document.querySelector(".read-more-btn");
    const extraStory = document.querySelector(".extra-story");
    if (readMoreButton && extraStory) {
        readMoreButton.addEventListener("click", () => {
            const willShow = extraStory.hidden;
            extraStory.hidden = !willShow;
            readMoreButton.setAttribute("aria-expanded", String(willShow));
            readMoreButton.innerHTML = willShow
                ? "READ A LITTLE LESS <span>−</span>"
                : "READ OUR LITTLE NOTE <span>＋</span>";
        });
    }
});
