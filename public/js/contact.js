// --- LATELY. Contact page JavaScript: front-end form validation only
// --- (no email/database connection).
document.addEventListener("DOMContentLoaded", () => {
    const contactForm = document.querySelector("#contactForm");
    if (!contactForm) return;

    const fields = [
        { id: "name", error: "nameError", message: "Please enter your name." },
        {
            id: "email",
            error: "emailError",
            message: "Please enter a valid email address.",
        },
        {
            id: "subject",
            error: "subjectError",
            message: "Please enter a subject.",
        },
        {
            id: "message",
            error: "messageError",
            message: "Please enter your message.",
        },
    ];

    function showError(field, message) {
        const input = document.getElementById(field.id);
        const error = document.getElementById(field.error);
        input.classList.toggle("invalid", Boolean(message));
        input.setAttribute("aria-invalid", String(Boolean(message)));
        error.textContent = message || "";
    }

    fields.forEach((field) => {
        const input = document.getElementById(field.id);
        input.addEventListener("input", () => showError(field, ""));
    });

    contactForm.addEventListener("submit", (event) => {
        event.preventDefault();
        let valid = true;
        fields.forEach((field) => {
            const value = document.getElementById(field.id).value.trim();
            let errorMessage = "";
            if (!value)
                errorMessage =
                    field.id === "email"
                        ? "Please enter your email address."
                        : field.message;
            else if (
                field.id === "email" &&
                !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
            )
                errorMessage = field.message;
            showError(field, errorMessage);
            if (errorMessage) valid = false;
        });
        const success = document.querySelector("#formSuccess");
        if (valid) {
            success.textContent =
                "Thank you! Your message passed the form checks. This demo does not send messages yet.";
            contactForm.reset();
        } else {
            success.textContent =
                "Please review the highlighted fields and try again.";
        }
    });
});
