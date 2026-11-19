// --- LATELY. shared JavaScript (loaded on every page): dark/light toggle + mobile navigation.
document.addEventListener("DOMContentLoaded", () => {
    // --- Dark / light mode. The selected theme is remembered in this browser.
    const themeButtons = document.querySelectorAll(".theme-toggle");
    const savedTheme = localStorage.getItem("lately-theme");
    if (savedTheme === "dark") document.body.classList.add("dark");

    function updateThemeButton() {
        const isDark = document.body.classList.contains("dark");
        themeButtons.forEach((button) => {
            const icon = button.querySelector(".theme-icon");
            if (icon) icon.textContent = isDark ? "☀" : "☾";
            button.setAttribute(
                "aria-label",
                isDark ? "Switch to light mode" : "Switch to dark mode",
            );
        });
    }
    updateThemeButton();
    themeButtons.forEach((button) =>
        button.addEventListener("click", () => {
            document.body.classList.toggle("dark");
            localStorage.setItem(
                "lately-theme",
                document.body.classList.contains("dark") ? "dark" : "light",
            );
            updateThemeButton();
        }),
    );

    // --- Mobile navigation menu.
    const menuButton = document.querySelector(".menu-toggle");
    const navigation = document.querySelector(".main-nav");
    if (menuButton && navigation) {
        menuButton.addEventListener("click", () => {
            const isOpen = navigation.classList.toggle("open");
            menuButton.setAttribute("aria-expanded", String(isOpen));
            menuButton.setAttribute(
                "aria-label",
                isOpen ? "Close navigation" : "Open navigation",
            );
            menuButton.textContent = isOpen ? "×" : "☰";
        });
        navigation.querySelectorAll("a").forEach((link) =>
            link.addEventListener("click", () => {
                navigation.classList.remove("open");
                menuButton.setAttribute("aria-expanded", "false");
                menuButton.textContent = "☰";
            }),
        );
    }
});
